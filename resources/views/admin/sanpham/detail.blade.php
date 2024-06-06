@extends('admin.layout')

@section('admin.content')
<div class="container">
<h1 style="color: red; text-align:center;padding-bottom:70px";>Chi Tiết Sản Phẩm</h1>
    <div class="row">
        
        <div class="col-md-6">
            <div class="product-image">
                
                <img src="/asset/IMG/{{ $sanpham->Anh }}" alt="{{ $sanpham->TenSanPham }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-details">
                <h1 class="product-name">{{ $sanpham->TenSanPham }}</h1>
                <p class="product-price">Giá: {{ number_format($sanpham->Gia, 0, '', ',') }} VNĐ</p>
                <div class="product-specs">
                    <h3>Thông số kỹ thuật</h3>
                    <ul>
                        <li>Kích cỡ màn hình: {{ $thongso->KichCo }}</li>
                        <li>Độ phân giải: {{ $thongso->DoPhanGiai }}</li>
                        <li>Loại màn hình: {{ $thongso->LoaiManHinh }}</li>
                        <li>Hệ điều hành: {{ $thongso->HeDieuHanh }}</li>
                        <li>Chất liệu chân đế: {{ $thongso->ChatLieuChanDe }}</li>
                        <li>Chất liệu viền tivi: {{ $thongso->ChatLieuVienTiVi }}</li>
                        <!-- Các thông số kỹ thuật khác -->
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
