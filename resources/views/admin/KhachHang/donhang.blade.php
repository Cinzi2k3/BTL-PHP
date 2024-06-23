@extends('admin.layout')

@section('admin.content')

<div class="container">
        <h2>Danh sách đơn hàng của {{ $khachhang->TenKhachHang }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($donhangs as $donhang)
                    <tr>
                        <td>{{ $donhang->MaDonHang }}</td>
                        <td>{{$donhang -> created_at}}</td>
                        <td>{{number_format ($donhang-> ThanhTien, 0, '', ',')}}đ</td>
                        <td>
                            @if($donhang->TrangThai == 0)
                                Đang xử lý
                            @elseif($donhang->TrangThai == 1)
                                Đã xác nhận
                            @endif
                        </td>
                        <td><a href="{{route ('admin.donhang.chitietdonhang', $donhang->MaDonHang) }}" class="btn btn-warning" style="margin-right: 16px">
                        <i class="fa fa-solid fa-eye"></i></a>
                      </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Không có đơn hàng nào.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $donhangs->links() }} <!-- Phân trang nếu cần -->
    </div>
@endsection