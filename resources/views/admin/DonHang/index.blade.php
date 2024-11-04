@extends('admin.layout')

@section('admin.content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý đơn hàng</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="{{route ( 'admin.donhang.donhangdaxacnhan' )}}" class="m-12 btn btn-primary">Danh sách đơn hàng đã xác nhận</a>
                </div>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="{{route ( 'admin.donhang.donhangchuaxacnhan' )}}" class="m-12 btn btn-primary">Danh sách đơn hàng đang xử lý</a>
                </div>

                @if (session('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div id="error-alert" class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Thành tiền</th>
                                <th>Ngày đặt hàng</th>
                                <th>Chức năng</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($db as $dh)
                            <tr>
                                <td>{{$dh->MaDonHang}}</td>
                                <td>{{$dh->khachhang->TenKhachHang}}</td>
                                <td>{{$dh->khachhang->SoDienThoai}}</td>
                                <td>{{$dh->khachhang->DiaChi}}</td>
                                <td>{{number_format($dh->ThanhTien, 0, '', ',')}}đ</td>
                                <td>{{$dh->created_at}}</td>
                                <td style="display: flex">
                                    <div>
                                        <a href="{{route('admin.donhang.chitietdonhang', $dh->MaDonHang)}}" class="btn btn-warning">
                                            <i class="fa fa-solid fa-eye"></i>
                                        </a>
                                    </div>
                                    <form action="{{ route('admin.donhang.updateStatus', $dh->MaDonHang) }}" method="post">
                                        @csrf
                                        @if($dh->TrangThai == 'Chờ xử lý')
                                        <select name="status" class="form-control" onchange="this.form.submit()">
                                            <option value="" disabled selected>Chọn trạng thái</option>
                                            <option value="1">Đã xác nhận</option>
                                            <option value="2">Đã hủy</option>
                                        </select>
                                        @elseif($dh->TrangThai == 'Đã xác nhận')
                                        <select name="status" class="form-control" onchange="this.form.submit()">
                                            <option value="" disabled selected>Chọn trạng thái</option>
                                            <option value="3">Đang giao</option>
                                            <option value="2">Đã hủy</option>
                                        </select>
                                        @elseif($dh->TrangThai == 'Đang giao')
                                        <select name="status" class="form-control" onchange="this.form.submit()">
                                            <option value="" disabled selected>Chọn trạng thái</option>
                                            <option value="4">Giao thành công</option>
                                            <option value="2">Đã hủy</option>
                                        </select>
                                        @endif

                                    </form>
                                </td>

                                <td>
                                    @if($dh->TrangThai == 'Đã xác nhận')
                                    <button class="btn btn-success">
                                        {{$dh->TrangThai}}
                                    </button>
                                    @elseif($dh->TrangThai == 'Chờ xử lý')
                                    <button class="btn btn-primary">
                                        {{$dh->TrangThai}}
                                    </button>
                                    @elseif($dh->TrangThai == 'Đang giao')
                                    <button class="btn btn-info">
                                        {{$dh->TrangThai}}
                                    </button>
                                    @elseif($dh->TrangThai == 'Giao thành công')
                                    <button class="btn btn-secondary">
                                        {{$dh->TrangThai}}
                                    </button>
                                    @else
                                    <button class="btn btn-danger">
                                        {{$dh->TrangThai}}
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Row-->

        <script>
            setTimeout(function() {
                document.getElementById('success-alert')?.remove();
                document.getElementById('error-alert')?.remove();
            }, 3000);
        </script>

    </div>

    @endsection