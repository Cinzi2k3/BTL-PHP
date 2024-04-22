@extends('user/layout')




@section('/user/content')
@include ('/user/slideshow')


<div class="Container">
    <div class="container">
        <div class="Container__title ">
            <b>tivi bán chạy</b>
        </div> 
        <div class="row">
        @foreach ($db as $sp)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="{{route('detail', $sp -> MaSanPham)}}" class="Home-product-item">
                        <img src="/Upload/{{$sp ->Anh}}" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            {{$sp -> TenSanPham}}
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> {{$sp-> thongsokythuat -> KichCo}}</span>
                            <span class="Home-product-item__compare-item">{{$sp-> thongsokythuat -> DoPhanGiai}}</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            {{-- <span class="Home_product-item__price-old">{{number_format ($sp-> Gia,3,",")}}đ</span>
                            <span class="Home_product-item__price-percent">-21%</span> --}}
                            <span class="Home_product-item__price-curent" >{{number_format ($sp-> Gia,3,",")}}₫</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                        <!-- <div class="Home-product-item__muangay">
                            <a href="../HTML/chitietsp.html"><h4>Mua ngay</h4></a>
                        </div> -->
                    </a>
                </div>
            </div>               
            @endforeach
            
            
        </div>
        <div class="Container__title" >
            <b>tivi samsung</b>
        </div>
        <div class="Container__product row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Samsung Crystal UHD 4K 43 inch UA43AU7000KXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">13.900.000đ</span>
                            <span class="Home_product-item__price-percent">-14%</span>
                            <span class="Home_product-item__price-curent" >11.890.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung2.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Neo QLED Samsung 4K 55 inch QA55QN90AAKXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 55 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">44.900.000đ</span>
                            <span class="Home_product-item__price-percent">-18%</span>
                            <span class="Home_product-item__price-curent" >36.890.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi QLED Samsung 4K 65 inch QA65Q70AAKXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">34.900.000đ</span>
                            <span class="Home_product-item__price-percent">-23%</span>
                            <span class="Home_product-item__price-curent" >
                                28.390.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung4.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi QLED Samsung 4K 50 inch QA50Q80AAKXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">28.900.000đ</span>
                            <span class="Home_product-item__price-percent">-22%</span>
                            <span class="Home_product-item__price-curent" >
                                22.890.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung5.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi QLED Samsung 4K 75 inch QA75Q60AAKXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 75 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">49.900.000đ</span>
                            <span class="Home_product-item__price-percent">-32%</span>
                            <span class="Home_product-item__price-curent" >38.890.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Samsung Crystal UHD 4K 50 inch UA50AU8000KXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">18.900.000đ</span>
                            <span class="Home_product-item__price-percent">-18%</span>
                            <span class="Home_product-item__price-curent" >16.090.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Samsung Crystal UHD 4K 50 inch UA50AU8000KXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">18.900.000đ</span>
                            <span class="Home_product-item__price-percent">-18%</span>
                            <span class="Home_product-item__price-curent" >16.090.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/samsung6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Samsung Crystal UHD 4K 50 inch UA50AU8000KXXV
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">18.900.000đ</span>
                            <span class="Home_product-item__price-percent">-18%</span>
                            <span class="Home_product-item__price-curent" >16.090.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="Container__title">
            <b>tivi lg</b>
        </div>
        <div class="Container__product row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi NanoCell LG 4K 50 inch 50NANO77TPA
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">21.900.000đ</span>
                            <span class="Home_product-item__price-percent">-37%</span>
                            <span class="Home_product-item__price-curent" >
                                16.350.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg2.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi LG 4K 55 inch 55UP7550PTC
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 65 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">20.900.000đ</span>
                            <span class="Home_product-item__price-percent">-33%</span>
                            <span class="Home_product-item__price-curent" >
                                15.850.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi LG 4K 50 inch 50UP8100PTB
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">19.400.000đ</span>
                            <span class="Home_product-item__price-percent">-29%</span>
                            <span class="Home_product-item__price-curent" >13.850.000đ

                            </span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg4.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi OLED LG 4K 55 inch OLED55C1PTB
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 55 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">48.200.000đ</span>
                            <span class="Home_product-item__price-percent">-28%</span>
                            <span class="Home_product-item__price-curent" >
                                35.850.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg5.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi LG 4K 50 inch 50UP7720PTC
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">18.900.000đ</span>
                            <span class="Home_product-item__price-percent">-29%</span>
                            <span class="Home_product-item__price-curent" >
                                14.850.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi NanoCell LG 4K 55 inch 55NANO86TPA
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 55 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">27.900.000đ</span>
                            <span class="Home_product-item__price-percent">-34%</span>
                            <span class="Home_product-item__price-curent" >
                                20.350.000đ</span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi LG 4K 50 inch 50UP8100PTB
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">19.400.000đ</span>
                            <span class="Home_product-item__price-percent">-29%</span>
                            <span class="Home_product-item__price-curent" >13.850.000đ

                            </span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/lg3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi LG 4K 50 inch 50UP8100PTB
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">19.400.000đ</span>
                            <span class="Home_product-item__price-percent">-29%</span>
                            <span class="Home_product-item__price-curent" >13.850.000đ

                            </span>
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
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="Container__title">
            <b>tivi Sony</b>
        </div>
        <div class="Container__product row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> 100 xuất cuối tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Android Tivi OLED Sony 4K 55 inch XR-55A90J VN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 55 inch</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">58.900.000đ</span>
                            <span class="Home_product-item__price-percent">-10%</span>
                            <span class="Home_product-item__price-curent" >
                                52.850.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                120
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony2.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Google Tivi Sony 4K 65 inch XR-65X90J VN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 65 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">36.300.000đ</span>
                            <span class="Home_product-item__price-percent">-27%</span>
                            <span class="Home_product-item__price-curent" >26.460.000đ
                            </span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                100
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
        
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> 200 xuất cuối tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Android Tivi Sony 4K 48 inch KD-48A9S VN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 48 inch</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">43.400.000đ</span>
                            <span class="Home_product-item__price-percent">-20%</span>
                            <span class="Home_product-item__price-curent" >34.850.000đ</span>
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
                                90
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony4.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Sony 50 inch KDL50W660G/ZVN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">15.000.000đ</span>
                            <span class="Home_product-item__price-percent">-14%</span>
                            <span class="Home_product-item__price-curent" >
                                13.350.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                200
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sanphambc5.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Google Tivi Sony 4K 43 inch KD-43X80J VN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">17.400.000đ</span>
                            <span class="Home_product-item__price-percent">-17%</span>
                            <span class="Home_product-item__price-curent" >14.850.000đ</span>
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
                                150
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                        <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                        <span class="Home-product-item__sale-title"> 200 xuất cuối tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Google Tivi Sony 8K 85 inch XR-85Z9J VN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 85 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">212.000.000đ</span>
                            <span class="Home_product-item__price-percent">-6%</span>
                            <span class="Home_product-item__price-curent" >
                                199.850.000đ</span>
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
                                3
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony4.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Sony 50 inch KDL50W660G/ZVN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">15.000.000đ</span>
                            <span class="Home_product-item__price-percent">-14%</span>
                            <span class="Home_product-item__price-curent" >
                                13.350.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                200
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/sony4.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Sony 50 inch KDL50W660G/ZVN3
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">15.000.000đ</span>
                            <span class="Home_product-item__price-percent">-14%</span>
                            <span class="Home_product-item__price-curent" >
                                13.350.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                200
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="Container__title">
            <b>Tivi TCL-Casper</b>
        </div>
        <div class="Container__product row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href=""  class="Home-product-item">
                        <img src="asset/IMG/Tcl1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Android Tivi TCL 4K 43 inch 43P618
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">8.900.000đ</span>
                            <span class="Home_product-item__price-percent">-10%</span>
                            <span class="Home_product-item__price-curent" >
                            9.990.000đ</span>
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
                                50
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/Tcl2.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Android Tivi TCL 4K 50 inch 50P618
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 50 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">11.990.000đ</span>
                            <span class="Home_product-item__price-percent">-8%</span>
                            <span class="Home_product-item__price-curent" >10.990.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                320
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/Tcl3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> 100 suất cuối tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Android Tivi QLED TCL 4K 55 inch 55C725
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 55 inch</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">20.990.000đ</span>
                            <span class="Home_product-item__price-percent">-33%</span>
                            <span class="Home_product-item__price-curent" >
                                14.090.000đ</span>
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
                                100
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/Casper1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Casper 43 inch 43FX5200
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.590.000đ</span>
                            <span class="Home_product-item__price-percent">-3%</span>
                            <span class="Home_product-item__price-curent" >
                                7.390.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                2
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/casper2.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm nhẹ</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Android Tivi Casper 4K 55 inch 55UG6100
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 55 inch</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">13.990.000đ</span>
                            <span class="Home_product-item__price-percent">-2%</span>
                            <span class="Home_product-item__price-curent" >
                                13.740.000đ</span>
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
                                10
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/casper3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> 100 suất cuối tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Casper 43 inch 43FX6200

                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.590.000đ</span>
                            <span class="Home_product-item__price-percent">-3%</span>
                            <span class="Home_product-item__price-curent" >
                                7.390.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                90
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>  
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/Casper1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Casper 43 inch 43FX5200
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.590.000đ</span>
                            <span class="Home_product-item__price-percent">-3%</span>
                            <span class="Home_product-item__price-curent" >
                                7.390.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                2
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/Casper1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Smart Tivi Casper 43 inch 43FX5200
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 43 inch</span>
                            <span class="Home-product-item__compare-item">Full HD</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.590.000đ</span>
                            <span class="Home_product-item__price-percent">-3%</span>
                            <span class="Home_product-item__price-curent" >
                                7.390.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                2
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>  
        </div>
        <div class="Container__title">
            <b>phụ kiện tivi</b>
        </div>
        <div class="Container__product row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href=""  class="Home-product-item">
                        <img src="asset/IMG/phukien1.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm nhẹ</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Dàn âm thanh Sony MHC-M40D
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 2.0 kênh</span>
                            <span class="Home-product-item__compare-item">500W</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Quà 100.000đ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">5.490.000đ</span>
                            <span class="Home_product-item__price-percent">-9%</span>
                            <span class="Home_product-item__price-curent" >
                                4.990.000đ</span>
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
                                1000
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien2.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> 100 suất trong tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Dàn karaoke gia đình combo 6
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 500W</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Quà 108.000đ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">9.990.000đ</span>
                            <span class="Home_product-item__price-percent">-10%</span>
                            <span class="Home_product-item__price-curent" >8.990.000đ </span>
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
                                50
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien3.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Loa du lịch SOUNDMAX M-6
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 500W</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">2.495.000đ</span>
                            <span class="Home_product-item__price-percent">-20%</span><br>
                            <span class="Home_product-item__price-curent" >   
                            1.990.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                90
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien4.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Cáp chuyển Mini DisplayPort - HDMI Male 2 m e.VALU PS8402A 
                        </h4>
                        <div class="Home-product-item__compare">
                            
                            <span class="Home-product-item__compare-item">2 mét</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                            <p style="padding-top: 9px;">Quà tặng 100.000đ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">300.000đ</span>
                            <span class="Home_product-item__price-percent">-40%</span><br>
                            <span class="Home_product-item__price-curent" >180.000đ</span>
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
                                70
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien5.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> 200 xuất trong tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Loa Bluetooth MozardX BM01 Đen 
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> 36W</span>
                            
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">1.150.000đ</span>
                            <span class="Home_product-item__price-percent">-15%</span>
                            <span class="Home_product-item__price-curent" >1.000.000đ</span>
                        </div>
                        <div class="Home-product-item__action">
                            <div class="Home-product-item__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                                <i style="color: #bdbdbd;" class="fa-solid fa-star"></i>
                            </div>
                            <span class="Home-product-item__like">
                                48
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm trong tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Loa kéo Paramax MK-368
                        </h4>
                        <div class="Home-product-item__compare">
                            
                            <span class="Home-product-item__compare-item">500W</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.790.000đ</span>
                            <span class="Home_product-item__price-percent">-10%</span>
                            <span class="Home_product-item__price-curent" >
                                7.000.000đ</span>
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
                                100
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>   
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm trong tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Loa kéo Paramax MK-368
                        </h4>
                        <div class="Home-product-item__compare">
                            
                            <span class="Home-product-item__compare-item">500W</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.790.000đ</span>
                            <span class="Home_product-item__price-percent">-10%</span>
                            <span class="Home_product-item__price-curent" >
                                7.000.000đ</span>
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
                                100
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">

                    <a href="" class="Home-product-item">
                        <img src="asset/IMG/phukien6.jpg" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm trong tuần</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            Loa kéo Paramax MK-368
                        </h4>
                        <div class="Home-product-item__compare">
                            
                            <span class="Home-product-item__compare-item">500W</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            <span class="Home_product-item__price-old">7.790.000đ</span>
                            <span class="Home_product-item__price-percent">-10%</span>
                            <span class="Home_product-item__price-curent" >
                                7.000.000đ</span>
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
                                100
                            </span>
                        </div>
                        <div class="Home-product-item__sale-off">
                            <img src="asset/IMG/docquyen.png" >   
                        </div>
                    </a>
                </div>
            </div>  
        </div>   
    </div>
</div>

@endsection
