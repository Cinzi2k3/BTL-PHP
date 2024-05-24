<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usser\HoaDonNhap;
use App\Models\Usser\ChiTietHoaDonNhap;
use App\Models\Usser\NhaCungCap;
use App\Models\Usser\SanphamModel;
use App\Models\Usser\Kho;
use App\Models\Usser\ChiTietKho;

class HoaDonNhapController extends Controller
{
    //
    public function index(){
        $db = HoaDonNhap::all();
        return view('admin.hoadonnhap.index', ['db' => $db]);
    }

    public function create(){

        $sp = SanphamModel::all();
        $ncc = NhaCungCap::all();
        $kho = Kho::all();
        return view('admin.hoadonnhap.create', ['ncc' => $ncc, 'sp' => $sp , 'kho' => $kho]);
    }

    public function store(Request $request){
        $input = $request-> all();

        
        $hdn = new HoaDonNhap();
        $cthdn = new ChiTietHoaDonNhap();
        // dd($input);

        //dd($request->all());
        //lưu thông tin hóa đơn nhập
        $hdn -> MaNhaCungCap = $input['MaNhaCungCap'];
        $hdn -> ThanhTien = $input['ThanhTien'];

        // dd($input);
        $hdn ->save();

        //lưu thông tin chi tiết hóa đơn nhập

        $cthdn -> MaHoaDonNhap = $hdn -> MaHoaDonNhap;
        $cthdn -> MaSanPham = $input['MaSanPham'];
        $cthdn -> DonGia = $input['DonGia'];
        $cthdn -> SoLuong = $input['SoLuong'];
        
        $cthdn -> save();

        //update số lượng trong kho

        $makho = ChiTietKho::where('MaKho', '=', $input['MaKho'])
            -> where('MaSanPham', '=', $input['MaSanPham'])        
            -> first();
        if($makho){
            $makho -> SoLuong += $input['SoLuong'];
            $makho -> save();
        }
        else{
            $ctkho = new ChiTietKho();

            $ctkho -> MaKho = $input['MaKho'];
            $ctkho -> MaSanPham = $input['MaSanPham'];
            $ctkho -> SoLuong = $input['SoLuong'];

            $ctkho -> save();

        }

        return redirect()->route('admin.hoadonnhap.index');

    }

    public function detail(string $id){
        $detail = ChiTietHoaDonNhap::where('MaHoaDonNhap', $id)->get();
        return view('admin.hoadonnhap.detail', ['detail' => $detail]);
    }

    
}
