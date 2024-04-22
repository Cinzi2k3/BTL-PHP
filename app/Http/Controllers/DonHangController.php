<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usser\SanPham;
use App\Models\Usser\DonHang;
use App\Models\Usser\ChiTietDonHang;
use App\Models\Usser\HoaDonBan;
use App\Models\Usser\ChiTietHoaDonBan;
use App\Models\Usser\ChiTietKho;
use App\Models\Usser\SanphamModel;

class DonHangController extends Controller
{
    //
    public function index(){
        $db = DonHang::all();
        $TrangThai = '';
        foreach($db as $dbs){
            if($dbs -> TrangThai == 0){
                $TrangThai = "Chờ xử lý";
            }
            else if($dbs -> TrangThai == 1){
                $TrangThai = "Đã xác nhận";
            }
            else if($dbs -> TrangThai == 2){
                $TrangThai = "Đã hủy";
                
            }
            $dbs -> TrangThai = $TrangThai;
        }
        
        return view('admin.donhang.index',['db' => $db]);
    }

    public function OderDetail(string $id) {
        $ctdh = ChiTietDonHang::where('MaDonHang' ,'=', $id) -> get();
        return view('admin.donhang.chitietdonhang', ['ctdh' => $ctdh]);
    }
    
    public function OderConfirm(){
        $dh = DonHang::where('TrangThai', '=', 1) -> get();
        foreach($dh as $dhcf){
            $dhcf -> TrangThai = 'Đã xác nhận';
        }
        // dd($dh);
        return view('admin.donhang.donhangdaxacnhan', ['dh' => $dh]);
    }

    public function OderUnConfirm(){
        $dh = DonHang::where('TrangThai', '=', 0) -> get();
        // dd($dh);
        foreach($dh as $dhucf){
            $dhucf -> TrangThai = 'Chờ xử lý';
        }

        return view('admin.donhang.donhangchuaxacnhan', ['dh' => $dh]);
    }

    public function ConfirmCheckout(string $id){
        $db = DonHang::all();

        
        $hdb = new HoaDonBan();
        
        $dh = DonHang::find($id);
        
        if($dh->TrangThai == 0){

            
            //lưu thông tin từ đơn hàng sang hóa đơn bán
            $hdb -> MaKhachHang = $dh -> MaKhachHang;
            $hdb -> ThanhTien = $dh -> ThanhTien;

            $hdb -> save();

            //lưu thông tin từ chi tiết đơn hàng sang chi tiết hóa đơn bán

            $ctdh = ChiTietDonHang::where('MaDonHang', '=', $dh -> MaDonHang) -> get();
            foreach($ctdh as $item){
                $cthdb = new ChiTietHoaDonBan();

                $cthdb -> MaHoaDonBan = $hdb -> MaHoaDonBan;
                $cthdb -> MaSanPham = $item -> MaSanPham;
                $cthdb -> SoLuong = $item -> SoLuong;
                $cthdb -> ThanhTien = $item -> ThanhTien;
                



                $sl = $this -> checksoluong($item -> MaSanPham);

                $getchitietkho = ChiTietKho::where('MaSanPham', $item -> MaSanPham) ->first();

                if($item ->SoLuong < $getchitietkho -> SoLuong){
                    $getchitietkho -> SoLuong = $sl - $item -> SoLuong;
                    
                    $getchitietkho -> save();
                }
                else{
                    session()->flash('error', 'Có lỗi xảy ra khi thực hiện thanh toán ');

                }

                $cthdb -> save();

                
            }

            $dh -> TrangThai = 1;
            $dh -> save();

            session()->flash('success', 'Thanh toán thành công');
            return $this -> ViewOder($id);
        
        }
        else{
            session()->flash('error', 'Vui lòng kiểm tra lại ');
            return redirect()->route('admin.donhang.index');

        }

    }

    public function CancelCheckout(string $id){

        $dh = DonHang::find($id);
        if($dh->TrangThai == 0){
            $dh -> TrangThai = 2;
            $dh -> save();
            session()->flash('sucess', 'Đơn hàng đã được hủy');

        }
        else{
            session()->flash('error', 'Vui lòng kiểm tra lại ');

        }

        return redirect()->route('admin.donhang.index');

    }

    public function checkSoLuong(string $id){
        $sp = SanphamModel::find($id);

        $sl = $sp -> MaSanPham;

        $ctk = ChiTietKho::where('MaSanPham', $sl) -> first();

        return $ctk -> SoLuong;        

        
    }

    public function ViewOder(string $id) {

        $dh = DonHang::find($id);
        

        // dd($dh);
        $ctdh = ChiTietDonHang::where('MaDonHang', $id)->get();
        return view('admin.donhang.viewoder', ['dh' => $dh, 'ctdh' => $ctdh]); 
    }

}
