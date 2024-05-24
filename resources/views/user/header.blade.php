<div class="Header">
    <div class="container">
        <div class="row navbar hide-on-tablet-mobile">
            <ul class="navbar__list">
                <li class="navbar__list-item">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    Cam kết giá tốt</li>
                <li class="navbar__list-item">
                        <a href="" class="navbar__list-item-link">
                            <i class="fa-solid fa-truck"></i>
                            Miễn phí vận chuyển
                        </a>
                </li>
                <li class="navbar__list-item">
                        <a href="" class="navbar__list-item-link">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            Bảo hành tận nơi
                        </a>
                </li>
            </ul>
            <ul class="navbar__list">
                <li class="navbar__list-item">
                    <span class="navbar__list-title--no">Kết nối</span>
                    <a  class="navbar__list-icons-link" href="https://www.facebook.com/cinzi610" target="blank">
                        <i class="navbar__list-icons fa-brands fa-facebook">
                            <p class="navbar__list-icons-mesenger">Kết nối facebook</p>
                        </i>
                    </a>
                    <a  class="navbar__list-icons-link" href="https://www.instagram.com/cinzii610/" target="blank">
                        <i class="navbar__list-icons fa-brands fa-instagram">
                            <p class="navbar__list-icons-mesenger">Kết nối instagram</p>
                        </i>
                    </a>
                </li>  
                <li class="navbar__list-item navbar__list-item--Strong">
                    <i class="fa-solid fa-user-plus"></i>
                    <a href="/register"> Đăng ký </a>
                </li>
                <li class="navbar__list-item navbar__list-item--Strong">
                    <i class="fa-solid fa-user"></i>
                    <a href="/login" >Đăng nhập</a>
                </li>   
            </ul>    
        </div>
        <div class="Header-with-search row">
            <div class="Header__logo">
                <a href="{{route('home')}}">
                    <img class="Header__logo-img"  src="/asset/IMG/logodienmayxanh.png">
                </a>
               
            </div>
            <!-- <div class="Header__search hide-on-mobile">
                <input type="text" class="Header__search-input" placeholder="Nhập tên TiVi... cần tìm">
                <button class="Header__search-btn">
                    <i class="Header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                </button>
            </div> -->
            <div class="Header__search hide-on-mobile">
                <form action="{{ route ('user/search') }}" method="post" style="width: 100%">
                    @csrf
                    <div class="Header__search hide-on-mobile">
                        
                        <input type="text" name="keywords_submit" id="" class="Header_search-input" placeholder="Nhập tên TiVi...">
                        <button class="Header__search-btn">
                    <i class="Header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                </button>
                    
                    
                    </div>
                </form>
                
            </div>
            
            <div class="Header__cart">
                <a href="{{route('user/cart')}}">
                    <i class="Header__cart-icon fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="Header-navbar hide-on-tablet-mobile">
        <div class="container">
            <ul class="Header-navbar__list row">
                <li class="Header-navbar__item">
                    <a class="Header-navbar__item-link" href="{{route('home')}}">
                        <i class="navbar__list-icons fa-solid fa-list"></i>
                        Danh mục sản phẩm
                    </a>
                    <ul class="submenu">
                        @foreach ($loaisp as $lsp)
                            <li class="submenu__item"><a class="submenu__item-link" href="/categories/{{$lsp -> MaLoai_id}}"><i class="navbar__list-icons fa-solid fa-tv"></i>{{$lsp -> TenLoai}} </a></li>
                            
                        @endforeach
                       
                        
                    </ul>
                </li>
                <li class="Header-navbar__item">
                    <a class="Header-navbar__item-link"href="">
                        <i class="navbar__list-icons fa-solid fa-phone-volume"></i>
                        Bán hàng trực tuyến
                    </a>
                    </li>
                <li class="Header-navbar__item">
                    <a class="Header-navbar__item-link" href="">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        Mua trả góp
                    </a>
                </li>
                <li class="Header-navbar__item">
                    <a class="Header-navbar__item-link" href="">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        Khuyến mãi</a>
                    </li>
                <li class="Header-navbar__item">
                    <a class="Header-navbar__item-link" href="">
                    <i class="fa-solid fa-newspaper"></i>
                    Tin tức
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @if(session('success'))
    <div id="success-alert" class="alert alert-success" >
    <i class="fas fa-check-circle"></i>
    <span>{{ session('success') }}</span>
    </div>
@endif
@if(session('error'))
    <div id="error-alert" class="alert alert-danger">
        <i class="fas fa-exclamation-circle"></i>
        <span>{{ session('error') }}</span>
    </div>
@endif


<script>
    // Chờ 3 giây sau khi trang đã tải
    setTimeout(function() {
        // Ẩn thông báo bằng cách thêm lớp "hidden"
        document.getElementById('success-alert').classList.add('hidden');
    }, 3000); // 3000 miligiây = 3 giây
    setTimeout(function() {
        // Ẩn thông báo bằng cách thêm lớp "hidden"
        document.getElementById('error-alert').classList.add('hidden');
    }, 3000); // 3000 miligiây = 3 giây
</script>

<style>
    .Header__search {
    position: relative;
}

.Header_search-input {
    width: calc(100% - 50px); /* Để lại không gian cho nút tìm kiếm */
    padding: 8px 12px; /* Thêm padding cho input */
    border: 1px solid #ccc; /* Đường viền input */
    border-radius: 5px; /* Bo tròn góc */
    font-size: 16px; /* Kích thước font */
    outline: none; /* Loại bỏ đường viền focus */
}

.Header__search-btn {
    position: absolute; /* Đặt nút tìm kiếm ở vị trí tuyệt đối */
    right: -2.2; /* Đẩy nút tìm kiếm sang phải */
    top: -2.5; /* Đẩy nút tìm kiếm lên trên */
    width: 50px; /* Độ rộng của nút */
    height: 100%; /* Chiều cao của nút bằng chiều cao của input */
    background-color: #007bff; /* Màu nền của nút */
    border: none; /* Loại bỏ đường viền */
    border-top-right-radius: 5px; /* Bo tròn góc của góc trên bên phải */
    border-bottom-right-radius: 5px; /* Bo tròn góc của góc dưới bên phải */
    cursor: pointer; /* Con trỏ chuột thành hình bàn tay khi hover */
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển màu */
}

.Header__search-btn:hover {
    background-color: #0056b3; /* Màu nền của nút khi hover */
}

.Header__search-btn-icon {
    color: #fff; /* Màu của biểu tượng trong nút */
    font-size: 20px; /* Kích thước của biểu tượng */
    vertical-align: middle; /* Canh giữa theo chiều dọc */
}

    .alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.7); 
        color: white;
        padding: 40px;
        border-radius: 10px; 
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        opacity: 1;
        transition: opacity 0.5s ease;
        display: flex;
        align-items: center;
    }

    .alert i {
        font-size: 40px;
        margin-right: 15px;
    }

    .alert span {
        font-family: Arial, sans-serif;
        font-size: 25px;
    }

    .hidden {
        opacity: 0;
        pointer-events: none;
    }
</style>







</div>