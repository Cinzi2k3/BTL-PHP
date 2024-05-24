@extends('user/layout')




@section('/user/content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="tile">Thông tin người nhận</h1>
                <hr>
                <form action="{{ route ('checkout.checkoutpost') }}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="username" class="form-label">Họ và tên</label>
                        <input style="font-size: 16px" type="text" class="form-control" id="username"  name="TenKhachHang" placeholder="Nhập họ tên đầy đủ">
                    </div> 
                    <div class="form-group">
                        <label for="Số điện thoại" class="form-label">Số điện thoại</label>
                        <input  style="font-size: 16px" type="text" class="form-control" id="number"  name="SoDienThoai" placeholder="Nhập số điện thoại">
                    </div> 
                    <div class="form-group">
                        <label for="Email" class="form-label"> Email</label>
                        <input  style="font-size: 16px" type="email" class="form-control" id="email"  name="Email" placeholder="Nhập email">
                    </div>  
                    <div class="form-group">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input  style="font-size: 16px" type="text" class="form-control" id="address"name="DiaChi" placeholder="Nhập địa chỉ">
                    </div> 
                    <div class="form-check check">
                        <input class="form-check-input ip-check" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label lb-check" for="flexCheckChecked">
                          Create an address?
                        </label>
                    </div>
                    <div class="">
                        <div class="your-oder">
                            <h1 class="tile">Đơn hàng của bạn</h1>
                            <table class="table table-striped table-oder">
                                <thead>
                                    <tr class="tr">
                                        <th>Ảnh</th>
                                        <th>Tên Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($cartItems as $item)
                                    <tr class="tr">
                                        <td><a href=""><img src="/Upload/{{$item->attributes->image}}" alt=""></a></td>
                                        <td>{{$item-> name}}</td>
                                        <td>{{$item -> quantity}}</td>
                                        <td>{{number_format($item -> price ,3,",")}}đ</td>
                                    </tr>

                                     @endforeach
                                     
                                </tbody>
                                
                        
                            </table>
                            <div style="font-size: 16px;margin-bottom: 20px;" class="checkout__order__total">Tổng số tiền ( {{ Cart::getTotalQuantity()}} sản phẩm ) :
                                <span >{{number_format(Cart::getTotal(),3,",") }}đ</span>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-primary btn-lg btn-oder" type="submit">Thanh toán</button>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

@endsection
