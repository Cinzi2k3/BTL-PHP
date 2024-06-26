@extends('user/layout')


@section('/user/content')
<section id="cart_items" style="margin-top: 160px;font-size: 16px;">
    <div class="container">
        <div class="table-responsive cart_info" style="overflow: hidden;">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Ảnh</td>
                        <td class="description">Sản Phẩm</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số Lượng</td>
                        <td class="total">Tổng Tiền</td>
                        <td>Chức năng</td>
                    </tr>
                </thead>
                <tbody id="mycart">
                    @foreach($cartItems as $item)
                    <tr >
                        <td class="cart_product">
                            <a href="{{route('detail', $item -> id)}}"><img src="/Upload/{{$item->attributes->image}}" alt="" style="width: 120px;margin-right:70px;"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="{{route('detail', $item -> id)}}">{{$item -> name}}</a></h4>    
                        </td>
                        <td class="cart_price">
                            <p>{{number_format ($item -> price, 0, '', ',')}}đ</p>
                        </td>
                        <td class="cart_quantity">
                            <form action="{{ route ('user/update') }}" method="POST">
                                @csrf
                                <div class="cart_quantity_button" >
                                    <input type="hidden" value="{{$item -> id}}" name="id">
                                    <input style="width:80px;height: 33px;"  class="cart_quantity_input" type="number" name="quantity" value="{{$item -> quantity}}" autocomplete="off" size="1">
                                    <button typpe="submit" class="btn btn-default update" href="" style="font-size: 16px;margin:0px;">Cập nhật</button>
                                </div>
                            </form>
                            
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{number_format($item -> price * $item -> quantity,0,'',',')}} đ</p>
                        </td>
                        <td class="cart_delete">
                            <form action="{{ route ('cart.removeCart') }}" method= "post">
                                @csrf
                                <input type="hidden" value="{{$item -> id}}" name="id">
                                <button  class="btn btn-delete" href="" style="font-size: 16px;margin:0px;"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
<section id="do_action">
    <div class="container">    
        <div >
            <div style="width: 100%;font-size: 16px;">
                <div class="total_area">
                    <ul style="list-style: none;">
                        <li>Tổng số lượng sản phẩm <span> {{ Cart::getTotalQuantity()}}</span></li>
                        <li>Tổng tiền hàng <span> {{number_format(Cart::getTotal(), 0, '', ',') }}đ</span></li>
                        <li>Gía vận chuyển<span>Miễn phí vận chuyển</span></li>
                        <li>Tổng thanh toán <span>{{number_format(Cart::getTotal(), 0, '', ',') }}đ </span></li>
                    </ul>
                       
                        <a class="btn btn-default check_out" href="{{route ('checkout')}}"  style="font-size: 16px;">Thủ tục thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

@endsection
