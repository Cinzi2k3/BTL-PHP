@extends('user/layout')



@section('/user/content')
<div class="container-sp">
    <div class="container">
        <div class="container-sp__link ">
            <a href="/">Trang chủ</a>
            <i class="container-sp__icons fa-solid fa-chevron-right"></i>
            <!-- <a href="" style="color: black">Tivi SamSung</a> -->
        </div>
        <div class="container-sp__product">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="container__product-bigimg">
                        <img class="container__product-img" src="/Upload/{{$sanpham -> Anh}}" >
                    </div>
                    <div class="container__product-smallimg">
                        <div class="container__product-listimg" style="margin: 0px 3px 0px 0px;">
                            <img src="/asset/IMG/sanpham1.jpg" class="container__product-img1">
                        </div>
                        <div class="container__product-listimg">
                            <img src="/asset/IMG/sanpham2.jpg" class="container__product-img1">
                        </div>
                        <div class="container__product-listimg">
                            <img src="/asset/IMG/sanpham3.jpg" class="container__product-img1">
                        </div>
                        <div class="container__product-listimg">
                            <img src="/asset/IMG/sanpham4.jpg" class="container__product-img1">
                        </div>
                        <div class="container__product-listimg">
                            <img src="/asset/IMG/sanpham5.jpg" class="container__product-img1">
                        </div>
                        <div class="container__product-listimg">
                            <img src="/asset/IMG/sanpham6.jpg" class="container__product-img1">
                        </div>
                    </div>
                    <div class="container__product-content">
                        <ul> <h4>Đặc điểm nổi bật</h4>
                            <li>{!! strip_tags(explode("\n", $sanpham->Mota)[0]) !!}</li>

                            <li>{!! strip_tags(explode("\n", $sanpham->Mota)[1]) !!}</li>

                            <li>{!! strip_tags(explode("\n", $sanpham->Mota)[2]) !!}</li>

                            <li>{!! strip_tags(explode("\n", $sanpham->Mota)[3]) !!}</li>

                            <li>{!! strip_tags(explode("\n", $sanpham->Mota)[4]) !!}</li>

                            <li>{!! strip_tags(explode("\n", $sanpham->Mota)[5]) !!}</li>
                        </ul>
                    </div>
                    <div class="container__content-hotrokh hide-on-mobile">
                        <h4>Hỗ trợ khách hàng</h4>
                    </div>
                    <div class="container__product-chamsockh hide-on-mobile">
                        <img src="/asset/IMG/ho-tro-kh.png">
                        <div class="container__product-ndchamsockh">
                            <a href="mailto:dienmayxanh@gmail.com">dienmayxanh@gmail.com</a><br>
                            <a href="">Chat với chúng tôi</a>
                            <p>Mua hàng - Góp ý - Bảo hành
                                Gọi <span>1800.6800</span> Miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="detail-product-item__name">
                        <h4>{{$sanpham -> TenSanPham}}</h4> 
                    </div>
                    <div class="detail-product-item__assess">
                        <p>5.0</p>
                        <i class="detail-product__assess-star fa-solid fa-star"></i>
                        <i class="detail-product__assess-star fa-solid fa-star"></i>
                        <i class="detail-product__assess-star fa-solid fa-star"></i>
                        <i class="detail-product__assess-star fa-solid fa-star"></i>
                        <i class="detail-product__assess-star fa-solid fa-star"></i>
                        <span>Có 6 đánh giá</span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 detail-price-right__price-right">
                            <div class="detail-price-right__curent" style="font-size: 30px;">
                                {{number_format ($sanpham -> Gia,3,"," )}}₫
                            </div>
                            <!-- <div class="detail-price-right__old">
                                <span class="detail-price-right__percent">
                                -21%
                                </span>
                                <span class="detail-price-right__old-percent">
                                21.900.000đ
                                </span>
                            </div>  -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                            <div class="detail-product-item__price-left">
                                <a href="" style="font-size: 20px;">Voucher giảm giá</a>
                                <p>Lên đến 50%</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="detail-product-item__compare">
                        <span class="detail-price-item__compare-item1"> Trả góp 0%</span>
                        <span class="detail-price-item__compare-item2">Mới</span>
                    </div> 
                    
                    <form action="{{ route ('user/addCart')  }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="MaSanPham" value="{{$sanpham -> MaSanPham}}">
                        <input type="hidden" name="TenSanPham" value="{{$sanpham -> TenSanPham}}">
                        <input type="hidden" name="Gia" value="{{$sanpham -> Gia}}">
                        <input type="hidden" name="Anh" value="{{$sanpham -> Anh}}">
                        <input type="hidden" name="Soluong" value="1">
                        <button  class="detail-product-item__compare-heading">
                            <h3>Mua ngay</h3>
                            <!-- <span>Giao hàng tận nơi</span> -->
                        </button>
                     
                    </form>
                    
                    
                    <div class="detail-product-item__phone">
                        <p>Gọi đặt mua 1800.6800 (08h - 21h)</p>
                    </div>
                    <div class="detail-product-item__sale">
                        <div class="detail-product-item__sale1" style="margin-top: 50px;">
                            <span class="detail-product-item__sale-stt">
                                1
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Mua Online nhập mã MID04 giảm thêm đến đến 1.000.000đ từ 14 - 17/04.
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                2
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Tặng Gói dịch vụ Max của FPT Play trong 1 tháng trị giá 88.000đ
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                3
                            </span>
                            <p class="detail-product-item__sale-noidung">     
                            Tặng Gói Gia đình tiêu chuẩn của ClipTV trong 1 năm trị giá 480.000đ
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                4
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Tặng Gói dịch vụ cơ bản của VTV Cab On trong 1 năm trị giá 360.000đ
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                5
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Tặng Gói dịch vụ VIP của VTV Cab On trong 3 tháng trị giá 198.000đ
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                6
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Tặng Gói dịch vụ phim ảnh của VTV Cab On trong 3 tháng trị giá 150.000đ
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                7
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Tặng thêm 01 năm bảo hành
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                8
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Giảm thêm 5% khi có hóa đơn mua hàng tại Điện máy xanh
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                9
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Được tặng bộ phiếu quà tặng trị giá 8.000.000đ khi mua kèm
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                10
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Giảm thêm 500.000đ khi thanh toán bằng thẻ tín dụng quốc tế
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                11
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Giảm thêm 500.000đ khi thanh toán bằng thẻ tín dụng
                            </p>
                        </div>
                        <div class="detail-product-item__sale1">
                            <span class="detail-product-item__sale-stt">
                                12
                            </span>
                            <p class="detail-product-item__sale-noidung">
                                Giảm thêm 500.000đ khi thanh toán bằng thẻ tín dụng
                            </p>
                        </div>
                        <div class="detail-product-item__khuyenmai">
                            <h3>khuyến mãi giá trị 1.276.000đ</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container__product-info">
                <div class="container">
                    <h4 class="container__product-name ">Sản Phẩm cùng loại</h4>
                    <hr>
                    <div class="row">
                        @foreach($getlsp as $dssp)
                        <div class="col-lg-2 col-md-4 col-sm-6 hide-on-mobile">
                            <a href="{{route('detail', $dssp -> MaSanPham)}}" class="Home-product-item">
                                <img src="/Upload/{{$dssp -> Anh}}" class="Home-product-item__img">
                                <div class="Home-product-item__sale">
                                    {{-- <img class="Home-product-item__sale-icon" src="" >
                                    <span class="Home-product-item__sale-title"> giảm sốc</span> --}}
                                </div>
                                <h4 class="Home-product-item__name">
                                    {{$dssp -> TenSanPham}}
                                </h4>
                                <div class="Home-product-item__compare">
                                    <span class="Home-product-item__compare-item">{{$dssp -> thongsokythuat -> KichCo}}</span>
                                    <span class="Home-product-item__compare-item">{{$dssp -> thongsokythuat -> DoPhanGiai}}</span>
                                </div>
                                <div class="Home-product-item__title-online">
                                    <p>Online giá rẻ</p>
                                </div>
                                <div class="Home-product-item__price">
                                    {{-- <span class="Home_product-item__price-old">13.900.000đ</span>
                                    <span class="Home_product-item__price-percent">-14%</span> --}}
                                    <span class="Home_product-item__price-curent" >{{number_format ($dssp->Gia,3,",")}}</span>
                                </div>
                                <div class="Home-product-item__action">
                                    <div class="Home-product-item__rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="Home-product-item__like">
                                        30
                                    </span>
                                </div>
                                <div class="Home-product-item__sale-off">
                                    <img src="/asset/IMG/docquyen.png" >   
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                        
                    </div>
                    <h4 class="container__product-name " style="margin-top: 60px;">Tính năng thông số kỹ thuật</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <img src="/asset/IMG/thongsokt.jpg" width="100%">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <h4 class="container__product-thongsochitiet" style="text-align: center;">Thông số kỹ thuật</h4>
                            <table class="container__product-thongsochitiets ">
                                <tr >
                                    <td class="title">Tên:</td>
                                    <td class="value">{{$sanpham -> TenSanPham}}</td>
                                </tr>
                                <tr>
                                    <td class="title">Kích cỡ:</td>
                                    <td class="value">{{$dssp -> thongsokythuat -> KichCo}}</td>
                                </tr>
                                <tr>
                                    <td class="title">Độ phân giải:</td>
                                    <td class="value">{{$dssp -> thongsokythuat -> DoPhanGiai}}</td>
                                </tr>
                                <tr>
                                    <td class="title">Loại màn hình:</td>
                                    <td class="value">{{$dssp -> thongsokythuat -> LoaiManHinh}}</td>
                                </tr>
                                <tr>
                                    <td class="title">Hệ điều hành :</td>
                                    <td class="value">{{$dssp -> thongsokythuat -> HeDieuHanh}}</td>
                                </tr>
                                <tr>
                                    <td class="title">Chất liệu chân đế:</td>
                                    <td class="value">{{$dssp -> thongsokythuat -> ChatLieuChanDe}}</td>
                                </tr>
                                <tr>    
                                    <td class="title">Chất liệu viền tivi:</td>
                                    <td class="value">{{$dssp -> thongsokythuat -> ChatLieuVienTiVi}}</td>
                                </tr>
                                
                            </table>
                            <div class="container__product-xemthem js-xemthem">
                                <h4>Xem thêm thông số kỹ thuật</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-sp2">
            <div class="container">
                <div class="container-sp2__gioithieu ">
                    <h4 > Giới thiệu sản phẩm</h4>
                </div>
                <div class="container-sp2__header">
                    <h3>Công nghệ Quantum Dot hiển thị 100% dải sắc màu</h3>
                    <p>Smart Tivi QLED Samsung 4K 50 inch QA50Q60AAKXXV trang bị Công nghệ Chấm Lượng Tử Quantum Dot hiển thị 100% dải màu với độ chân thực sống động và rõ nét, cho bạn thưởng thức những khung hình tivi tuyệt đẹp mang màu sắc cuộc sống, chân thực ở mọi mức độ sáng.</p>
                </div>
                <div class="container-sp2__img">
                    <img src="/asset/IMG/thongtin1.jpg" >
                </div>
                <div class="container-sp2__header" style="margin-top: 20px;">
                    <h3>Công nghệ đèn nền Dual LED hiển thị hình ảnh với độ tương phản chính xác</h3>
                    <p>Smart Tivi QLED Samsung 4K 50 inch QA50Q60AAKXXV đột phá với công nghệ đèn nền Dual LED với khả năng tối ưu hóa tông màu đèn nền phù hợp với từng loại nội dung, cho phép hiển thị hình ảnh với độ tương phản rõ nét và chuẩn xác đến không ngờ mang đến cho bạn những trải nghiệm điện ảnh đỉnh cao.</p>
                </div>
                <div class="container-sp2__img">
                    <img src="/asset/IMG/thongtin2.jpg" >
                </div>
                <div class="container-sp2__header">
                    <h3>Công nghệ Quantum HDR mang đến khung hình chân thực</h3>
                    <p>Smart Tivi QLED Samsung 4K 50 inch QA50Q60AAKXXV trang bị công nghệ Quantum HDR có khả năng tăng cường độ tương phản của hình ảnh, kiến tạo những khung hình rực rỡ cho bạn đắm chìm trong những khung hình chân thực đến từng chi tiết.</p>
                </div>
                <div class="container-sp2__img">
                    <img src="/asset/IMG/thongtin3.jpg" >
                </div>
                <div class=" row container-sp2__header2">
                    <div class="col-lg-6 col-md-6 ">
                        <h3>Công nghệ Quantum HDR mang đến khung hình chân thực</h3>
                        <p>Smart Tivi QLED Samsung 4K 50 inch QA50Q60AAKXXV trang bị công nghệ Quantum HDR có khả năng tăng cường độ tương phản của hình ảnh, kiến tạo những khung hình rực rỡ cho bạn đắm chìm trong những khung hình chân thực đến từng chi tiết.</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="/asset/IMG/gioithieu4.jpg" width="100%">
                    </div>

                </div>
                <div class=" row container-sp2__header2">
                    <div class="col-lg-6 col-md-6">
                        <img src="/asset/IMG/gioithieu5.jpg" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <h3>Công nghệ Quantum HDR mang đến khung hình chân thực</h3>
                        <p>Smart Tivi QLED Samsung 4K 50 inch QA50Q60AAKXXV trang bị công nghệ Quantum HDR có khả năng tăng cường độ tương phản của hình ảnh, kiến tạo những khung hình rực rỡ cho bạn đắm chìm trong những khung hình chân thực đến từng chi tiết.</p>
                    </div>
                    
                </div>  
                <div class=" row container-sp2__header2">
                    <div class="col-lg-6 col-md-6  ">
                        <h3>Công nghệ Quantum HDR mang đến khung hình chân thực</h3>
                        <p>Smart Tivi QLED Samsung 4K 50 inch QA50Q60AAKXXV trang bị công nghệ Quantum HDR có khả năng tăng cường độ tương phản của hình ảnh, kiến tạo những khung hình rực rỡ cho bạn đắm chìm trong những khung hình chân thực đến từng chi tiết.</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="/asset/IMG/gioithieu6.jpg" width="100%">
                    </div>
                </div>        
            </div>    
        </div>
        <div class="container-comment">
            <div class="container-comment__header">
                <h4>Đánh giá và nhận xét</h4>
            </div>
            <div class="container-comment__container">
                <div class="container-comment__container1">
                    <h4>Đánh giá và nhận xét về Samsung Smart TV Crystal UHD UA55AU8100</h4>
                </div>
                <div class="container-comment__star">
                    <div class="container-comment__5star">
                        <span>5.0 </span>
                            <i class="fa-solid fa-star"></i> 
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <p>có 3 đánh giá</p>
                    </div>
                    <div class="container-comment__danhgia">
                        <button type="button " class="container-comment__btn">Gửi đánh giá</button>
                    </div>
                </div>
                <div class="container-comment__noidung">
                    <p>Mình mua sản phẩm Smart Tivi QLED Samsung 4K 75 tới nay cũng đã tròn 1 tháng. Trong quá trình sử dụng mình rất ưng ý với chất lượng sản phẩm, nó rất đáng với số tiền mình bỏ ra, nó mang lại cho mình những giây phút giải trí cực kì thoải mái với âm thanh và hình ảnh sắc nét.</p>
                    <div class="container-comment__noidung1">
                        <div class="container-comment__name">
                            <span>5<i style="font-size: 1.0rem; padding-left: 3px;" class="fa-solid fa-star"></i></span>
                            <p>Đỗ Mạnh Cường</p>
                        </div>
                        <div class="container-comment__like">
                            <span><i style="color: #a0a2ac;" class="fa-solid fa-rotate-left"></i>Trả lời</span>
                            <p> Thích <i style="color: #a0a2ac;" class="fa-solid fa-thumbs-up"></i></p>
                        </div>
                    </div>
                </div>
                <div class="container-comment__noidung" style="background-color: white;">
                    <p>Chưa tìm ra chỗ nào để chê quả Smart Tivi Samsung Crystal UHD 4K 55 này luôn ý mọi người, mặc dù từ khi mua ả về là chồng em còn mê ả hơn mê em, ơ nhưng mà không hiểu sao mà em cũng mê ả hơn mê chồng. Ui chùi cày phim hàn thì bao đỉnh, toàn lừa lừa lúc con ngủ mới xem được thôi, tuyệt vời lắm nha.</p>
                    <div class="container-comment__noidung1">
                        <div class="container-comment__name">
                            <span>5<i style="font-size: 1.0rem; padding-left: 3px;" class="fa-solid fa-star"></i></span>
                            <p>Đặng Nhật Duy</p>
                        </div>
                        <div class="container-comment__like">
                            <span><i style="color: #a0a2ac;" class="fa-solid fa-rotate-left"></i>Trả lời</span>
                            <p> Thích <i style="color: #a0a2ac;" class="fa-solid fa-thumbs-up"></i></p>
                        </div>
                    </div>
                </div>
                <div class="container-comment__noidung">
                    <p>Ưng ơi là ưng, nhà mình mua 1 chiếc Smart Tivi Samsung Crystal UHD 4K 55 để phòng khách, mà xem thích quá lại mua thêm cái nữa để phòng ngủ. Thích nhất là hình ảnh chuyển động rất đẹp, xem phim hành động bá cháy. Mua online nên được hãng giảm giá cho nữa, càng thích hơn. Tuyệt vời ghê!</p>
                    <div class="container-comment__noidung1">
                        <div class="container-comment__name">
                            <span>5<i style="font-size: 1.0rem; padding-left: 3px;" class="fa-solid fa-star"></i></span>
                            <p>Đỗ Hồng Việt</p>
                        </div>
                        <div class="container-comment__like">
                            <span><i style="color: #a0a2ac;" class="fa-solid fa-rotate-left"></i>Trả lời</span>
                            <p> Thích <i style="color: #a0a2ac;" class="fa-solid fa-thumbs-up"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-hoidap">
            <h4>Hỏi đáp và bình luận</h4>
            <div class="container-hoidap1">
                <p>Có 0 bình luận về Smart Tivi Samsung Crystal UHD 4K 55 inch UA55AU8000KXXV</p>
            </div>
            <textarea id="subject" name="subject" placeholder="Mời bạn bình luận.Vui lòng nhập Tiếng Việt có dấu"></textarea>
        </div>
    </div>
</div>

@endsection