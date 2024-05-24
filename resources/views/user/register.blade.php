@extends('user/layout')

@section('/user/content')
<div class="login-container">
    <div class="container">
        <div class="login-container_home">
            <a href="/" class="login-container__trove ">
                <span style="color: darkgray;">Trang chủ</span><i class="fa-solid fa-angles-right"></i>
            </a>
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin:0 auto;">
                <div class="auth-form">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__heading2">Chào mừng bạn đến với Điện máy xanh</span>
                    </div>
                    <form action="/" id="register" method="post"> 
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" id="HoTen" placeholder="Nhập họ và tên của bạn...">
                            </div>
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" id="SoDienThoai" placeholder="Nhập số điện thoại của bạn...">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" id="MatKhau" placeholder="Nhập mật khẩu của bạn...">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" id="XacNhanMatKhau" placeholder="Xác nhận mật khẩu của bạn...">
                            </div>
                        </div>
                        <div class="auth-form__controls" >
                            <input class="btn" type="submit" value="Đăng Ký" ></input>
                        </div>
                    </form>
                    <div class="auth-form__footer">
                        <h5>Bạn đã có tài khoản?</h5>
                        <span> <a href="/login"> Đăng nhập </a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
