@extends('admin.layout')



@section('admin.content')
<div class="col-lg-12">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Thêm hóa đơn nhập</h6>
        </div>
        <div class="card-body">
            <form action="{{ route ('admin.hoadonnhap.store') }}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="">Nhà cung cấp</label>
                    <select class ="form-control" name ="MaNhaCungCap">
                        <option value="">Nhà Cung Cấp</option>
                        @foreach($ncc as  $ncc)
                            <option value="{{$ncc -> MaNhaCungCap}}">{{$ncc -> TenNhaCungCap}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <select class ="form-control" name="MaSanPham" id="">
                        <option value="">Tên Sản Phẩm</option>
                        @foreach($sp as  $sp)
                            <option value="{{$sp -> MaSanPham}}">{{$sp -> TenSanPham}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Tên Kho</label>
                    <select class ="form-control" name="MaKho" id="">
                        <option value="">Tên Kho</option>
                        @foreach($kho as  $kho)
                            <option value="{{$kho -> MaKho}}">{{$kho -> TenKho}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="">Đơn Giá</label>
                    <input type="number" class="form-control" id="DonGia" name="DonGia" oninput="TinhThanhTien()"
                    placeholder="Nhập Giá">
                </div>
                <div class="form-group">
                    <label for="">Số Lượng</label>
                    <input type="number" class="form-control" id="SoLuong" name="SoLuong" oninput="TinhThanhTien()"
                    placeholder="Nhập Số Lượng">
                </div>
                <div class="form-group">
                    <label for="">Thành Tiền</label>
                    <input type="number" class="form-control" id="ThanhTien" name="ThanhTien" >
                </div>
                


                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('ckeditor_footer')
    <script>
        function TinhThanhTien() {
            let SoLuong = document.getElementById("SoLuong").value;
            let DonGia = document.getElementById("DonGia").value;
            let ThanhTien = SoLuong * DonGia;
            document.getElementById("ThanhTien").value = ThanhTien;
    }
    </script>
@endpush