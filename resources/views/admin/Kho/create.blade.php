@extends('admin.layout')

@section('admin.content')
<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Thêm kho</h6>
    </div>
    <div class="card-body">
      <form action="{{route('admin.kho.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        {{-- // phải có đối với tất cải file post --}}
        {{-- <div class="form-group">
            <label style="font-size: 20px" for="exampleInputEmail1">Mã Khách Hàng</label>
            <input class="form-control form-control-lg mb-3" type="text" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your
            email with anyone else.</small> 
        </div> --}}
        <div class="form-group">
            <label style="font-size: 20px" for="exampleInputEmail1">Tên kho</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="TenKho">
        </div>
     
        <div class="form-group">
            <label style="font-size: 20px" for="exampleInputEmail1">Địa Chỉ</label>
            <input class="form-control form-control-lg mb-3" type="text"  name="DiaChi">
        
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
