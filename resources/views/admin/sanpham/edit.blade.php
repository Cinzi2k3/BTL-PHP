@extends('admin.layout')
@push('ckeditor')
    <script src="/ckeditor/ckeditor.js"></script>
@endpush

@section('admin.content')
<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Sửa sản phẩm</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.sanpham.update', $db -> MaSanPham)}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
            <label for="tenloai" style="font-size: 14px">Tên loại</label>
            <select class ="form-control" name ="MaLoai_id">
            @foreach($loaisp as $lsp)
                <option value="{{$lsp->MaLoai_id}}">{{$lsp->TenLoai}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group" >
            <label style="font-size: 14px" for="exampleInputEmail1">Tên Sản Phẩm</label>
            <input  style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="TenSanPham" value="{{$db -> TenSanPham}}">
        </div>
        <div class="form-group" style="font-size: 14px">
            <label style="font-size: 14px" for="exampleInputEmail1">Ảnh</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="file"  name="Anh" value="{{$db-> Anh}}">
        
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Giá</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="Gia" value="{{$db-> Gia}}">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Mô Tả</label>
            <textarea style="font-size: 14px" class="form-control form-control-lg mb-3" type="text" id="Mota" name="Mota" value="{{$db-> Mota}}">
            </textarea>
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Kích Cỡ Màn Hình</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="KichCo" value="{{$db-> KichCo}}" >
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Độ Phân Giải</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="DoPhanGiai" value="{{$db-> DoPhanGiai}}">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Loại Màn Hình</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="LoaiManHinh" value="{{$db-> LoaiManHinh}}">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Hệ Điều Hành</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="HeDieuHanh" value="{{$db-> HeDieuHanh}}">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Chất Liệu Chân Đế</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="ChatLieuChanDe" value="{{$db-> ChatLieuChanDe}}">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Chất Liệu Viền TiVi</label>
            <input style="font-size: 14px" class="form-control form-control-lg mb-3" type="text"  name="ChatLieuVienTiVi" value="{{$db-> ChatLieuVienTiVi}}">
        </div>

        {{-- <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="Anh" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
          </div>
        </div> --}}
        <button type="submit" class="btn btn-primary">Sửa</button>
      </form>
    </div>
  </div>

@endsection
@push('ckeditor_footer')
    <script>
        CKEDITOR.replace('Mota')
    </script>
@endpush
