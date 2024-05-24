<?php

namespace App\Http\Controllers;

use App\Models\Usser\NhaCungCap;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhaCCController extends Controller
{
    public function index()
    {
        $cc = NhaCungCap::all();
        return view('admin.nhacungcap.index', ['cc'=> $cc]);
    }

    public function create()
    {
        return view('admin.nhacungcap.create');
    }

    public function store(Request $request)
    {
        NhaCungCap::create($request->all());
        return redirect()->route('admin.nhacungcap.index');
    }

    public function show(string $id)
    {
        $cc = NhaCungCap::find($id);
        return $cc;
    }

    public function edit(string $id)
    {
        // dd($id);
        $cc = NhaCungCap::find($id);
        return view('admin.nhacungcap.edit', ['cc' => $cc]);
    }

    

    public function update(Request $request, string $id)
    {
        $input = $request -> all();

        // dd($request->all());
            $cc= NhaCungCap::find($id);     
            $cc -> TenNhaCungCap = $input['TenNhaCungCap'];
            $cc -> SoDienThoai = $input['SoDienThoai'];
            $cc -> DiaChi = $input['DiaChi'];
            $cc -> save();

            
            
            return redirect() -> route('admin.nhacungcap.index');
        }
    

    public function destroy(string $id)
    {
        NhaCungCap::find($id) -> delete($id);
        return redirect() -> route('admin.nhacungcap.index');
    }


  
}


?>
