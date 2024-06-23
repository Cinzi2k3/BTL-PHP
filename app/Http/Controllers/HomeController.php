<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usser\SanphamModel;
use App\Models\Usser\LoaiSanPhamModel;
use App\Models\Usser\ThongSoKyThuat;

class HomeController extends Controller
{
    public function index(  ){
        $loaisp = LoaiSanPhamModel::all();
        $db = SanPhamModel::limit(20) -> get(); 
        $spmv = SanphamModel::orderBy('created_at', 'desc') -> limit(20) -> get();
        return view('user/index',['loaisp' => $loaisp, 'db' => $db ,'spmv' => $spmv]);
       
    }
    
    public function categories( $id=null){
        $loaisp =  LoaiSanPhamModel::all();
        $db= SanPhamModel::where ('MaLoai_id', '=',$id) ->get();
        return view('user/categories',['loaisp' => $loaisp, 'db' => $db]);
    }


    public function checkout( ){
        return view('user/checkout');
    }   
    public function detail($id=null){ 
        // dd($id);
        $sanpham = SanphamModel::find($id);
        $sp = $sanpham -> MaLoai_id ;
        // dd($lsp);
        $getlsp=SanphamModel::where('MaLoai_id',$sp)->get();
        $loaisp =  LoaiSanPhamModel::all();
        return view('user/detail', [ 'loaisp' => $loaisp, 'sanpham' => $sanpham,'getlsp' => $getlsp]);
    }
    public function search (Request $request){
        $input = $request->keywords_submit;
        $loaisp=LoaiSanPhamModel::all();
        $search = SanphamModel::join('thongsokythuat', 'sanpham.MaSanPham', '=', 'thongsokythuat.MaSanPham')
            ->select('sanpham.*', 'thongsokythuat.KichCo', 'thongsokythuat.DoPhanGiai')
            ->orderBy('sanpham.MaSanPham', 'asc')
            ->where('sanpham.TenSanPham', 'like', '%' . $input . '%')
            ->get();
    
        return view('user/search', ['search' => $search, 'loaisp'=> $loaisp]);
    }
    
    public function contact(){
        $loaisp=LoaiSanPhamModel::all();
        return view('user/contact',['loaisp'=>$loaisp]);
    }
    public function login(){
        $loaisp = LoaiSanPhamModel::all();
        return view('user/login', ['loaisp' => $loaisp]);
    }
    public function register(){
        $loaisp = LoaiSanPhamModel::all();
        return view('user/register', ['loaisp' => $loaisp]);
    }

    
}
