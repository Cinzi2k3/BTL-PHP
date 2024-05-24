@extends('/user/layout')

@section('/user/content')


<div class="content">
   


    <!-- Begin Home product -->
    <div class="container">
    <div class="container">
        <div class="Container__title ">
            <b>Kết quả tìm kiếm</b>
        </div>
            
    <div class="row">        
         
            @foreach($search as $sanpham)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-item">
                    <a href="{{route('detail', $sanpham -> MaSanPham)}}" class="Home-product-item">
                        <img src="/Upload/{{$sanpham ->Anh}}" class="Home-product-item__img">
                        <div class="Home-product-item__sale">
                            <img class="Home-product-item__sale-icon" src="asset/IMG/icon1.png" >
                            <span class="Home-product-item__sale-title"> giảm sốc</span>
                        </div>
                        <h4 class="Home-product-item__name">
                            {{$sanpham -> TenSanPham}}
                        </h4>
                        <div class="Home-product-item__compare">
                            <span class="Home-product-item__compare-item"> {{$sanpham-> thongsokythuat -> KichCo}}</span>
                            <span class="Home-product-item__compare-item">{{$sanpham-> thongsokythuat -> DoPhanGiai}}</span>
                        </div>
                        <div class="Home-product-item__title-online">
                            <p>Online giá rẻ</p>
                        </div>
                        <div class="Home-product-item__price">
                            {{-- <span class="Home_product-item__price-old">{{number_format ($sanpham-> Gia,3,",")}}đ</span>
                            <span class="Home_product-item__price-percent">-21%</span> --}}
                            <span class="Home_product-item__price-curent" >{{number_format ($sanpham-> Gia,3,",")}}₫</span>
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

    </div>
    
    <!-- End Home Product -->
    
</div>

@endsection
