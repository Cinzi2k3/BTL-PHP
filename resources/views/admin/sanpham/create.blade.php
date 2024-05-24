@extends('admin.layout')
@push('ckeditor')
    <script src="/ckeditor/ckeditor.js"></script>
@endpush
@section('admin.content')
<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
    </div>
    <div class="card-body">
      <form action="{{route('admin.sanpham.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        {{-- // phải có đối với tất cải file post --}}
        {{-- <div class="form-group">
            <label style="font-size: 20px" for="exampleInputEmail1">Mã Loại</label>
            <input class="form-control form-control-lg mb-3" type="text" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your
            email with anyone else.</small> 
        </div> --}}
        <div class="form-group">
            <label for="TenLoai" style="font-size: 14px">Tên Loại</label>
            <select class ="form-control" name ="MaLoai_id">
                @foreach($db as  $lsp)
                    <option value="{{$lsp -> MaLoai_id}}">{{$lsp -> TenLoai}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Tên Sản Phẩm</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="TenSanPham">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Ảnh</label>
            <input class="form-control form-control-lg mb-3" type="file"  name="Anh">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Giá</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="Gia">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Mô Tả</label>
            <textarea class="form-control form-control-lg mb-3" type="text"  name="Mota" id="Mota">
            </textarea>
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Kích Cỡ Màn Hình</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="KichCo">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Độ Phân Giải</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="DoPhanGiai">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Loại Màn Hình</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="LoaiManHinh">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Hệ Điều Hành</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="HeDieuHanh">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Chất Liệu Chân Đế</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="ChatLieuChanDe">
        </div>
        <div class="form-group">
            <label style="font-size: 14px" for="exampleInputEmail1">Chất Liệu Viền TiVi</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="ChatLieuVienTiVi">
        </div>
        {{-- <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
          </div>
        </div> --}}
        <button type="submit" class="btn btn-primary">Thêm</button>
      </form>
    </div>
  </div>

@endsection
@push('ckeditor_footer')
    <script>
        CKEDITOR.replace('Mota')
    </script>
@endpush