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
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__heading2">Chào bạn quay lại</span>
                    </div>
                    <form action="/" id="login" method="post"> 
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" id="TaiKhoan" placeholder="Nhập số điện thoại của bạn...">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" id="MatKhau" placeholder="Nhập mật khẩu của bạn...">
                            </div>
                        </div>
                        <div class="auth-form__controls" >
                            <input class="btn" type="submit" value="Đăng Nhập" ></input>
                        </div>
                    </form>
                    <div class="auth-form__socials">
                        <p> <a href=""> Bạn quên mật khẩu? </a></p>
                        <div class="auth-form__socials1">
                            <span>Hoặc sử dụng</span>
                        </div>
                        <div class="auth-__socials-btn">
                            <button class="col-lg-6 col-md-6 col-sm-12 col-12 btn1" style="margin-right: 10px; background-color:#0b4cc5;"><i class="fa-brands fa-facebook-square" style="padding-right: 5px;"></i>Đăng nhập bằng Facebook</button>
                            <button class="col-lg-6 col-md-6 col-sm-12 col-12 btn1" style="background-color: #d11919;"><i class="fa-brands fa-google-plus-square"style="padding-right: 5px;"></i>Đăng nhập bằng Google</button>
                        </div>
                    </div>
                    <div class="auth-form__footer">
                        <h5>Bạn mới biết đến Điện máy xanh?</h5>
                        <span> <a href=""> Đăng ký </a></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection