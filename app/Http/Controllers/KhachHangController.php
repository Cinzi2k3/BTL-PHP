<?php

namespace App\Http\Controllers;

use App\Models\Usser\KhachHang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function index()
    {
        $kh = KhachHang::all();
        return view('admin.khachhang.index', ['kh'=> $kh]);
    }

    public function create()
    {
        return view('admin.khachhang.create');
    }

    public function store(Request $request)
    {
        KhachHang::create($request->all());
        return redirect()->route('admin.khachhang.index');
    }

    public function show(string $id)
    {
        $kh = KhachHang::find($id);
        return $kh;
    }

    public function edit(string $id)
    {
        // dd($id);
        $kh = KhachHang::find($id);
        return view('admin.khachhang.edit', ['kh' => $kh]);
    }

    

    public function update(Request $request, string $id)
    {
        $input = $request -> all();

        // dd($request->all());
            $kh= KhachHang::find($id);     
            $kh -> TenKhachHang = $input['TenKhachHang'];
            $kh -> SoDienThoai = $input['SoDienThoai'];
            $kh -> DiaChi = $input['DiaChi'];
            $kh -> Email = $input['Email'];
            $kh -> save();

            
            
            return redirect() -> route('admin.khachhang.index');
        }
    

    public function destroy(string $id)
    {
        KhachHang::find($id) -> delete($id);
        return redirect() -> route('admin.khachhang.index');
    }

    public function donhangcuakhachhang($id)
    {
        $khachhang = KhachHang::find($id);
        $donhangs = $khachhang->donhang()->paginate(10);
        
        return view('admin.khachhang.donhang', compact('khachhang', 'donhangs'));
    }
    
}


?>
