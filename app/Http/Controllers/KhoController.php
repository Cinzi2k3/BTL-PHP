<?php

namespace App\Http\Controllers;

use App\Models\Usser\Kho;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usser\ChiTietKho;

class KhoController extends Controller
{
    public function index()
    {
        $kho = Kho::all();
        return view('admin.kho.index', ['kho'=> $kho]);
    }
    public function create()
    {   
        return view('admin.kho.create');
    }
    public function store(Request $request)
    {
        Kho::create($request->all());
        return redirect()->route('admin.kho.index');
    }

    public function show(string $id)
    {
        $kho = Kho::find($id);
        return $kho;
    }

    public function edit(string $id)
    {
        // dd($id);
        $kho = Kho::find($id);
        return view('admin.kho.edit', ['kho' => $kho]);
    }
    public function update(Request $request, string $id)
    {
        $input = $request -> all();

        // dd($request->all());
            $kho= Kho::find($id);     
            $kho -> TenKho = $input['TenKho'];
            $kho -> DiaChi = $input['DiaChi'];
            $kho -> save();
          
            return redirect() -> route('admin.kho.index');
        }
    

    public function destroy(string $id)
    {
        Kho::find($id) -> delete($id);
        return redirect() -> route('admin.kho.index');
    }
    public function chitietkho(string $id){
        $ctk = ChiTietKho::where('MaKho' ,'=', $id) -> get();
        return view('admin.kho.chitietkho',['ctk' => $ctk]);
    }

}
