@extends('admin.layout')

@php
    $index = 1;

@endphp

@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống kê số lượng nhập</h1>
    
    </div>

    <div class="row">
        <div class="col-lg-12">        
            <div class="card mb-4">
                <div class="col-xs-12" style="display: flex; padding-top: 30px;" >

                </div>
                <div class="table-responsive p-3">
                    
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Tên nhà cung cấp</th>
                                <th>Địa Chỉ</th>
                                <th>Sản phẩm</th>
                                <th>Gía</th>
                                <th>Số Lượng</th>
                                <th>Thành tiền</th>
                                
                            </tr>
                        </thead>
                        @foreach($cc as $hd)
                        <tr>
                            <td>{{$hd->TenNhaCungCap}}</td>
                            <td>{{$hd->DiaChi}}</td>
                            <td>{{$hd->TenSanPham}}</td>
                            <td>{{ number_format($hd->DonGia, 0, '',',') }}đ</td>
                            <td>{{ $hd->SoLuongDaNhap }}</td>
                            <td>{{ number_format($hd->ThanhTien, 0, '', ',') }}đ</td>
                        </tr>
                        
                        
                        @endforeach
                    
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    <!--Row-->
    
    
   
</div>
@endsection


