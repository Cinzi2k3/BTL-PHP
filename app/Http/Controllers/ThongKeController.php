<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usser\HoaDonBan;
use App\Models\Usser\ChiTietHoaDonBan;
use App\Models\Usser\LoaiSanPhamModel;
use DB;

class ThongKeController extends Controller
{
    //
    public function index(){
        $loaisp=LoaiSanPhamModel::all();
        return view('admin.thongke.index',['loaisp' => $loaisp]);
    }

    public function theongay(Request $request){
        $ngay = strtotime($request->ngay);
        $thongke = HoaDonBan::whereDate('created_at', date('Y-m-d', $ngay))->get();

        $tongtien = 0;
        $soluong = 0;
        foreach($thongke as $item){
            $tongtien += $item->ThanhTien;
            foreach($item->chitiethoadonban as $chitiet){
                $soluong += $chitiet->SoLuong;
                
            }
        }
        // dd($thongke);
        
        return view('admin.thongke.index', ['thongke' => $thongke, 'tongtien' => $tongtien, 'soluong' => $soluong]);

    }
    public function theothangget(){
        return view('admin.thongke.theothang');

    }

    public function theothang(Request $request){
        
        $thongke = HoaDonBan::whereMonth('created_at', $request -> thang)->get();

        $tongtien = 0;
        $soluong = 0;
        foreach($thongke as $item){
            $tongtien += $item->ThanhTien;
            foreach($item->chitiethoadonban as $chitiet){
                $soluong += $chitiet->SoLuong;
                // dd($soluong);
            }
        }
        return view('admin.thongke.theothang', ['thongke' => $thongke, 'tongtien' => $tongtien, 'soluong' => $soluong]);
    }

    public function khachhang(){
        

        
        $kh = HoaDonBan::select('MaKhachHang', DB::raw('SUM(chitiethoadonban.soluong) as TongSoLuongDaMua'))
            -> join('chitiethoadonban', 'hoadonban.MaHoaDonBan', '=', 'chitiethoadonban.MaHoaDonBan')
            -> groupBy('hoadonban.MaKhachHang')
            -> orderBy('TongSoLuongDaMua', 'desc')
            -> get();
        

        return view('admin.thongke.khachhang', ['kh' => $kh]);
    }

    
    
    
}
