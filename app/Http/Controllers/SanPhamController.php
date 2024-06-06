<?php

namespace App\Http\Controllers;

use App\Models\Usser\ChiTietKho;
use Illuminate\Http\Request;
use App\Models\Usser\SanphamModel;
use App\Models\Usser\LoaiSanPhamModel;
use App\Models\Usser\ThongSoKyThuat;


class SanPhamController extends Controller
{
    
    public function index()
    {
        $db = SanphamModel::all();
        return view('admin.sanpham.index', ['db'=> $db ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $db = LoaiSanPhamModel::all();
        
        return view('admin.sanpham.create', ['db'=> $db]);
        
    }

    public function showAdmin($id)
    {
        $sanpham = SanphamModel::findOrFail($id);
        $thongso = ThongSoKyThuat::where('MaSanPham', $id)->first();
        return view('admin.sanpham.detail', compact('sanpham', 'thongso'));
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $input = $request -> all();
        // dd($request->all());
        $sp = new SanphamModel();
        $tskt = new ThongSoKyThuat();
        if($request -> hasFile('Anh')){

            $image = $request ->file('Anh');
            $image_name = $image -> getClientOriginalName();
            
            $image -> move(public_path('Upload'), $image_name);

            $input['Anh'] = $image_name;
        }
        $sp -> MaLoai_id = $input['MaLoai_id'];
        $sp -> TenSanPham = $input['TenSanPham'];
        $sp -> Anh = $input['Anh'];
        $sp -> Gia = $input['Gia'];
        $sp -> Mota = $input['Mota'];
        $sp -> save();

        
        $tskt -> MaSanPham = $sp->MaSanPham;
        $tskt -> LoaiManHinh = $input['LoaiManHinh'];
        $tskt -> HeDieuHanh = $input['HeDieuHanh'];
        $tskt -> ChatLieuChanDe = $input['ChatLieuChanDe'];
        $tskt -> ChatLieuVienTiVi = $input['ChatLieuVienTiVi'];
        $tskt -> KichCo = $input['KichCo'];
        $tskt -> DoPhanGiai = $input['DoPhanGiai'];
        $tskt -> save();
        return redirect() -> route('admin.sanpham.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = SanphamModel::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $loaisp = LoaiSanPhamModel::all();
        $db = SanphamModel::find($id);
        return view('admin.sanpham.edit', ['loaisp' => $loaisp, 'db' => $db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request -> all();

    // dd($request->all());
        $sp = SanphamModel::find($id);
        $tskt = ThongSoKyThuat::where('MaSanPham', $id)->first();
        if($request -> hasFile('Anh')){
            
            $image = $request ->file('Anh');
            $image_name = $image -> getClientOriginalName();

            $image -> move(public_path('Upload'), $image_name);

            $input['Anh'] = $image_name;
        }
        
        $sp -> MaLoai_id = $input['MaLoai_id'];     
        $sp -> TenSanPham = $input['TenSanPham'];
        $sp -> Anh = $input['Anh'];
        $sp -> Gia = $input['Gia'];
        $sp -> Mota = $input['Mota'];
        $sp -> save();
        

        $tskt -> KichCo = $input['KichCo'];
        $tskt -> DoPhanGiai = $input['DoPhanGiai'];
        $tskt -> LoaiManHinh = $input['LoaiManHinh'];
        $tskt -> HeDieuHanh = $input['HeDieuHanh'];
        $tskt -> ChatLieuChanDe = $input['ChatLieuChanDe'];
        $tskt -> ChatLieuVienTiVi = $input['ChatLieuVienTiVi'];
        $tskt -> save();
        return redirect() -> route('admin.sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        SanPhamModel::find($id) -> delete($id);
        return redirect() -> route('admin.sanpham.index');
    }
    
}
