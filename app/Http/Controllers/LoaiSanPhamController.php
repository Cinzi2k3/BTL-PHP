<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usser\LoaiSanPhamModel;

class LoaiSanPhamController extends Controller
{
    
    public function index(){
        
        $db = LoaiSanPhamModel::all();
        
        return view('admin.loaisanpham.index', ['db'=> $db]);

        
    }
    public function create()
    {
        return view('admin.loaisanpham.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        LoaiSanPhamModel::create($request -> all());
        return redirect() -> route('admin.loaisanpham.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = LoaiSanPhamModel::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $db = LoaiSanPhamModel::find($id);
        return view('admin.loaisanpham.edit', ['db' => $db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        LoaiSanPhamModel::find($id) -> update(['TenLoai' => $request->TenLoai]);
        return redirect() -> route('admin.loaisanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        //
        LoaiSanPhamModel::find($id) -> delete($id);
        return redirect() -> route('admin.loaisanpham.index');

    }
}
