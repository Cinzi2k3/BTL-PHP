@extends('admin.layout')

@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">QUẢN LÝ LOẠI SẢN PHẨM</h1>
      {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">DataTables</li>
      </ol> --}}
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý loại sản phẩm</h6>
          </div>
          <p style="padding-left:20px;color: black"><a class=" btn btn-sm btn-primary" href="{{route('admin.loaisanpham.create')}}">Thêm</a></p>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>Mã loại</th>
                  <th>Tên Loại</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($db as $sp)
                <tr>
                    <td>{{$sp->MaLoai_id}}</td>
                    <td>{{$sp->TenLoai}}</td>
                    <td style="color: black">
                      
                        <a onclick="return confirm('Bạn có muốn xóa không?')" class=" btn btn-danger" style="background-color: red" href="{{route('admin.loaisanpham.destroy',$sp->MaLoai_id)}}">Xóa</a>
                        <a class=" btn btn-info" href="{{route('admin.loaisanpham.edit',$sp->MaLoai_id)}}">Sửa</a>         
                      
                    </td>
                    
                </tr>
                
                    
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
    </div>
    <!--Row-->

    <!-- Documentation Link -->
    <div class="row">
      {{-- <div class="col-lg-12">
        <p>DataTables is a third party plugin that is used to generate the demo table below. For more information
          about DataTables, please visit the official <a href="https://datatables.net/" target="_blank">DataTables
            documentation.</a></p>
      </div> --}}
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to logout?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
