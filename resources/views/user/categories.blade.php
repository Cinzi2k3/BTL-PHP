@extends('user/layout')



@section('/user/content')
<section class="filter-out" style="display: flex;justify-content: center;margin-top:10%;">
    <div class="filter">
        <div class="title">Bộ lọc</div>
        <div class="box">
            <div class="box-left">Hãng sản xuất</div>
            <div class="box-right">
                <div class="name">ACER</div>
                 <div class="name">ASUS</div>
                <div class="name">CONCEPTD</div>
                <div class="name">FUJITSU</div>
                <div class="name">LENOVO</div>
                <div class="name">MICROSOFT</div>
                <div class="name">SAMSUNG</div>
                <div class="name">APPLE</div>
                <div class="name">AVITA</div>
                <div class="name">DELL</div>
                <div class="name">HP</div>
                <div class="name">LG</div>
                <div class="name">MSI</div>
                <div class="name">VGS</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">Khoảng giá</div>
            <div class="box-right">
                <div class="name">Dưới 10 triệu</div>
                <div class="name">10 triệu - 15 triệu</div>
                <div class="name">15 triệu - 20 triệu</div>
                <div class="name">20 triệu - 25 triệu</div>
                <div class="name">25 triệu - 30 triệu</div>
                <div class="name">30 triệu - 35 triệu</div>
                <div class="name">35 triệu - 40 triệu</div>
                <div class="name">40 triệu - 45 triệu</div>
                <div class="name">45 triệu - 50 triệu</div>
                <div class="name">50 triệu - 60 triệu</div>
                <div class="name">60 triệu - 70 triệu</div>
                <div class="name">70 triệu - 80 triệu</div>
                <div class="name">Trên 80 triệu</div>
        </div>
        <div class="box">
            <div class="box-left">Nhu cầu sử dụng</div>
            <div class="box-right">
                <div class="name">Laptop gaming</div>
                <div class="name">Đồ họa, kiến trúc</div>
                <div class="name">Phổ thông, văn phòng</div>
                <div class="name">Mỏng nhẹ, thời trang</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">CPU</div>
            <div class="box-right">
                <div class="name">Intel Celeron / Pentium</div>
               <div class="name">Intel Core i3</div>
                <div class="name">Intel Core i5</div>
                <div class="name">Intel Core i7</div>
                <div class="name">Intel Core i9</div>
                <div class="name">Intel Core M3</div>
                <div class="name">Intel Xeon</div>
                <div class="name">AMD Ryzen 3</div>
                <div class="name">AMD Ryzen Athlon</div>
                <div class="name">AMD Ryzen 5</div>
                <div class="name">AMD Ryzen 7</div>
                <div class="name">AMD Ryzen 9</div>
                <div class="name">Microsoft SQ1</div>
                <div class="name">Microsoft SQ2</div>
                <div class="name">Apple M1</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">RAM</div>
            <div class="box-right">
                <div class="name">4GB</div>
                <div class="name">8GB</div>
                <div class="name">16GB</div>
                <div class="name">32GB</div>
                <div class="name">>32GB</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">Ổ cứng</div>
            <div class="box-right">
                <div class="name">Chỉ có SSD</div>
                <div class="name">Chỉ có HDD</div>
                <div class="name">SSD + HDD</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">VGA - Card màn hình</div>
            <div class="box-right">
                <div class="name">VGA NVIDIA</div>
                <div class="name">VGA AMD</div>
                <div class="name">VGA Onboard</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">Kích thước màn hình</div>
            <div class="box-right">
                @foreach ($db as $dssp)
                <div class="name">{{$dssp ->thongsokythuat -> KichCo}}</div>
                @endforeach
                
            </div>
        </div>
        <div class="box">
            <div class="box-left">Độ phân giải</div>
            <div class="box-right">
                @foreach ($db as $dssp)
                <div class="name">{{$dssp->thongsokythuat ->DoPhanGiai}}</div>
                @endforeach
               
                
            </div>
        </div>
        <div class="box">
            <div class="box-left">Cảm ứng màn hình</div>
            <div class="box-right">
                <div class="name">Có cảm ứng</div>
                <div class="name">Không có</div>
            </div>
        </div>
        <div class="box">
            <div class="box-left">Hệ điều hành</div>
            <div class="box-right">
                <div class="name">Windows 10</div>
                <div class="name">Linux</div>
                <div class="name">Dos</div>
                <div class="name">Mac OS</div>
            </div>
        </div>
    </div>
</section>
<section class="main-out" style="display: flex;justify-content: center;margin-top:20px;">
    <div class="main">
        <div class="box-inner">
            <div class="box-left">Sắp xếp theo</div>
            <div class="box-right">
                <div class="name">Khuyến mại tốt nhất</div>
                <div class="name">Bán chạy</div>
                <div class="name">Mới về</div>
                <div class="name">Giá giảm dần</div>
                <div class="name">Giá tăng dần</div>
                <div class="price">
                    <input type="text" id="pricedown" placeholder="Giá thấp nhất"> -
                    <input type="text" id="priceup" placeholder="Giá cao nhất">
                    <button>Lọc</button>
                </div>
            </div>
        </div>
        <div class="box-bottom">
            <div class="row">
                @foreach ($db as $dssp)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item">
                        <a href="{{route('detail',$dssp->MaSanPham)}}" class="Home-product-item">
                            <img src="/Upload/{{$dssp->Anh}}" class="Home-product-item__img">
                            <div class="Home-product-item__sale">
                                <img class="Home-product-item__sale-icon" src="/asset/IMG/icon1.png" >
                                <span class="Home-product-item__sale-title"> giảm sốc</span>
    
                            </div>
                            <h4 class="Home-product-item__name">
                               {{$dssp->TenSanPham}}
                            </h4>
                            <div class="Home-product-item__compare">
                                <span class="Home-product-item__compare-item"> {{$dssp -> thongsokythuat -> KichCo}}</span>
                                <span class="Home-product-item__compare-item">{{$dssp -> thongsokythuat -> DoPhanGiai}}</span>
                            </div>
                            <div class="Home-product-item__title-online">
                                <p>Online giá rẻ</p>
                            </div>
                            <div class="Home-product-item__price">
                                {{-- <span class="Home_product-item__price-old">{{number_format ($dssp-> Gia,3,",")}}đ</span>
                                <span class="Home_product-item__price-percent">-21%</span> --}}
                                <span class="Home_product-item__price-curent" >{{number_format ($dssp-> Gia,3,",")}}đ</span>
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
                            <!-- <div class="Home-product-item__muangay">
                                <a href="../HTML/chitietsp.html"><h4>Mua ngay</h4></a>
                            </div> -->
                        </a>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
</section>
<section class="page" style=" margin-bottom: 20px;">
    <button><i class="fas fa-angle-left"></i></button>
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>4</button>
    <button><i class="fas fa-angle-right"></i></button>
</section>

@endsection
