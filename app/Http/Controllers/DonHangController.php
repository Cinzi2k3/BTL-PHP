<?php

namespace App\Http\Controllers;

use App\Mail\Trangthai;
use Illuminate\Http\Request;
use App\Models\Usser\DonHang;
use App\Models\Usser\ChiTietDonHang;
use App\Models\Usser\HoaDonBan;
use App\Models\Usser\ChiTietHoaDonBan;
use App\Models\Usser\ChiTietKho;
use App\Models\Usser\SanphamModel;
use App\Models\Usser\KhachHang;
use Illuminate\Support\Facades\Mail;

class DonHangController extends Controller
{
    public function index()
    {
        $db = DonHang::all();

        foreach ($db as $dbs) {
            switch ($dbs->TrangThai) {
                case 0:
                    $dbs->TrangThai = "Chờ xử lý";
                    break;
                case 1:
                    $dbs->TrangThai = "Đã xác nhận";
                    break;
                case 2:
                    $dbs->TrangThai = "Đã hủy";
                    break;
                case 3:
                    $dbs->TrangThai = "Đang giao";
                    break;
                case 4:
                    $dbs->TrangThai = "Giao thành công";
                    break;
            }
        }

        return view('admin.donhang.index', ['db' => $db]);
    }

    public function OderDetail(string $id)
    {
        $ctdh = ChiTietDonHang::where('MaDonHang', '=', $id)->get();
        return view('admin.donhang.chitietdonhang', ['ctdh' => $ctdh]);
    }

    public function xacnhan()
    {
        $dh = DonHang::where('TrangThai', '=', 1)->get();
        return view('admin.donhang.donhangdaxacnhan', ['dh' => $dh]);
    }

    public function xuly()
    {
        $dh = DonHang::where('TrangThai', '=', 0)->get();
        return view('admin.donhang.donhangchuaxacnhan', ['dh' => $dh]);
    }


    public function checkSoLuong(string $id)
    {
        $sp = SanphamModel::find($id);
        $ctk = ChiTietKho::where('MaSanPham', $sp->MaSanPham)->first();
        return $ctk->SoLuong;
    }

    public function updateStatus(Request $request, string $id)
    {
        $dh = DonHang::find($id);
        $status = $request->input('status');
        $statusText = '';

        // Xử lý trạng thái mới
        if ($status == 1) { // Đã xác nhận
            $dh->TrangThai = 1;
            $statusText = 'Đã xác nhận';
            $dh->save();
            session()->flash('success', 'Đơn hàng đã được xác nhận ');
        } elseif ($status == 2) { // Hủy đơn hàng
            if ($dh->TrangThai != 4) { // Đã giao không thể hủy
                $dh->TrangThai = 2;
                $statusText = 'Đã hủy';
                $dh->save();
                session()->flash('success', 'Đơn hàng đã được hủy');
            } else {
                session()->flash('error', 'Không thể hủy đơn hàng đã giao');
            }
        } elseif ($status == 3) { // Đang giao
            $dh->TrangThai = 3;
            $statusText = 'Đang giao';
            $dh->save();
            session()->flash('success', 'Đơn hàng đã được cập nhật trạng thái Đang giao');
        } elseif ($status == 4) { // Đã giao
            $dh->TrangThai = 4;
            $statusText = 'Giao thành công';
            $dh->save();

            // Thực hiện tạo hóa đơn và lưu chi tiết hóa đơn tại đây
            $hdb = new HoaDonBan();
            $hdb->MaKhachHang = $dh->MaKhachHang;
            $hdb->ThanhTien = $dh->ThanhTien;
            $hdb->save();

            // Lưu thông tin từ chi tiết đơn hàng sang chi tiết hóa đơn bán
            $ctdh = ChiTietDonHang::where('MaDonHang', '=', $dh->MaDonHang)->get();
            foreach ($ctdh as $item) {
                $cthdb = new ChiTietHoaDonBan();
                $cthdb->MaHoaDonBan = $hdb->MaHoaDonBan;
                $cthdb->MaSanPham = $item->MaSanPham;
                $cthdb->SoLuong = $item->SoLuong;
                $cthdb->ThanhTien = $item->ThanhTien;

                $sl = $this->checkSoLuong($item->MaSanPham);
                $getchitietkho = ChiTietKho::where('MaSanPham', $item->MaSanPham)->first();

                if ($item->SoLuong <= $getchitietkho->SoLuong) {
                    $getchitietkho->SoLuong -= $item->SoLuong;
                    $getchitietkho->save();
                } else {
                    session()->flash('error', 'Có lỗi xảy ra khi thực hiện thanh toán');
                    return redirect()->route('admin.donhang.index');
                }

                $cthdb->save();
            }

            session()->flash('success', 'Đơn hàng đã được cập nhật trạng thái Đã giao và hóa đơn đã được tạo thành công');
        } else {
            session()->flash('error', 'Trạng thái không hợp lệ');
        }

        $kh = KhachHang::find($dh->MaKhachHang); 
        if ($kh) {
            Mail::to($kh->Email)->send(new Trangthai($dh,$kh,$statusText));
        } else {
            session()->flash('error', 'Không tìm thấy thông tin khách hàng.');
        }

        return redirect()->route('admin.donhang.index');
    }
}
