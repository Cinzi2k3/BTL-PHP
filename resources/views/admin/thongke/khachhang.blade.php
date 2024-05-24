@extends('admin.layout')

@php
    $index = 1;

@endphp

@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống kê khách hàng</h1>
    
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
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Email</th>
                                <th>Số lượng đơn hàng đã mua</th>
                                
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($kh as $item)
                                <tr>
                                
                                    <td>{{$item -> khachhang -> TenKhachHang}}</td>
                                    <td>{{$item -> khachhang -> SoDienThoai}}</td>
                                    <td>{{$item -> khachhang -> DiaChi}}</td>
                                    <td>{{$item -> khachhang -> Email}}</td>
                                    <td>{{$item -> TongSoLuongDaMua }}</td>
                                </tr>
                            @endforeach

                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    <!--Row-->
    
    
   
</div>
@endsection


