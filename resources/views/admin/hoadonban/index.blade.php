@extends('admin.layout')



@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý hóa đơn bán</h1>
    
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                
                
                
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                            
                                <th>Mã hóa đơn bán</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Thành tiền</th>
                                <th>Ngày đặt hàng</th>
                                <th>Chức năng</th>

                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($hdb as $hdb)
                                <tr>
                                    <td>{{$hdb -> MaHoaDonBan }}</td>
                                    <td>{{$hdb -> KhachHang -> TenKhachHang}}</td>
                                    <td>{{$hdb -> KhachHang -> SoDienThoai}}</td>
                                    <td>{{$hdb -> KhachHang -> DiaChi}}</td>
                                    <td>{{number_format ($hdb-> ThanhTien, 0, '', ',')}}đ</td>
                                    
                                    <td>
                                        {{$hdb -> created_at }}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.hoadonban.detail', $hdb -> MaHoaDonBan) }}" class="btn btn-warning" >
                                            <i class="fa fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                    
                                
                                    
                                    
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

