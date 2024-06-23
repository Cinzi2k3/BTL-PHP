@extends('user/layout')



@section('/user/content')
<section class="filter-out" style="display: flex;justify-content: center;margin-top:10%;">
    <div class="filter">
        <div class="Container__title ">
            <b>Danh sách loại tivi</b>
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
                                {{-- <span class="Home_product-item__price-old">{{number_format ($dssp-> Gia, 0, '', ',')}}đđ</span>
                                <span class="Home_product-item__price-percent">-21%</span> --}}
                                <span class="Home_product-item__price-curent" >{{number_format ($dssp-> Gia, 0, '', ',')}}đđ</span>
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
