<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/TQ', function () {
    return view('admin/index');
});



Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/categories/{Maloai_id?}','categories')->name('categories');
    Route::get('/checkout','checkout')->name('checkout');
    Route::get('/detail/{id?}','detail')->name('detail');
    Route::get('/contact','contact')->name('contact');
    Route::get('/login','login')->name('login');
    Route::get('/register','register')->name('register');
    Route::post('/search', 'search') -> name('user/search');



    
      
});


Route::controller(App\Http\Controllers\CartController::class) -> group(function(){
    Route::get('/cart', 'cart') -> name('user/cart');
    Route::post('/addcart', 'addCart') -> name('user/addCart');
    Route::post('/updatecart', 'updateCart')->name('user/update');

    Route::post('/removeCart', 'removeCart')->name('cart.removeCart');

    // Route::post('clear', 'clearAllCart')->name('cart.clear');

    Route::get('/checkout', 'checkout') -> name('checkout');
    Route::post('/checkoutpost', 'checkoutpost') -> name('checkout.checkoutpost');

    

});

Route::controller(App\Http\Controllers\LoaiSanPhamController::class)->group(function(){
    Route::get('/admin/loaisanpham/index','index')->name('admin.loaisanpham.index'); 
    Route::get('/admin/loaisanpham/create', 'create') -> name('admin.loaisanpham.create');
    Route::post('/admin/loaisanpham/store', 'store') -> name('admin.loaisanpham.store');
    
    Route::get('/admin/loaisanpham/edit/{id}', 'edit') -> name('admin.loaisanpham.edit');
    Route::post('/admin/loaisanpham/update/{id}', 'update') -> name('admin.loaisanpham.update');


    Route::get('/admin/loaisanpham/delete/{id}', 'destroy') -> name('admin.loaisanpham.destroy');   
});
Route::controller(App\Http\Controllers\SanPhamController::class)->group(function(){
    Route::get('/admin/sanpham/index','index')->name('admin.sanpham.index'); 
    Route::get('/admin/sanpham/create', 'create') -> name('admin.sanpham.create');
    Route::post('/admin/sanpham/store', 'store') -> name('admin.sanpham.store');
    
    Route::get('/admin/sanpham/edit/{id}', 'edit') -> name('admin.sanpham.edit');
    Route::post('/admin/sanpham/update/{id}', 'update') -> name('admin.sanpham.update');


    Route::get('/admin/sanpham/delete/{id}', 'destroy') -> name('admin.sanpham.destroy'); 
    
    Route::get('/sanpham/{id}', 'showAdmin')->name('admin.sanpham.show');


});
Route::controller(App\Http\Controllers\DonHangController::class) -> group(function(){
    Route::get('/admin/donhang/index', 'index') -> name('admin.donhang.index');

    Route::get('/admin/donhang/chitietdonhang/{id}', 'OderDetail') -> name('admin.donhang.chitietdonhang');

    Route::get('/admin/donhang/confirm', 'OderConfirm') -> name('admin.donhang.donhangdaxacnhan');

    Route::get('/admin/donhang/unconfirm', 'OderUnConfirm') -> name('admin.donhang.donhangchuaxacnhan');

    Route::post('/admin/donhang/confirmcheckout/{id}', 'ConfirmCheckout') -> name('admin.donhang.ConfirmCheckout') ;
    Route::post('/admin/donhang/CancelCheckout/{id}', 'CancelCheckout') -> name('admin.donhang.CancelCheckout') ;  
    
    Route::get('/admin/donhang/viewoder/{id}', 'Viewoder') -> name('admin.donhang.viewoder');
});
Route::controller(App\Http\Controllers\KhachHangController::class)->group(function(){
    Route::get('/admin/khachhang/index','index')->name('admin.khachhang.index'); 
    Route::get('/admin/khachhang/create', 'create') -> name('admin.khachhang.create');
    Route::post('/admin/khachhang/store', 'store') -> name('admin.khachhang.store');
    
    Route::get('/admin/khachhang/edit/{id}', 'edit') -> name('admin.khachhang.edit');
    Route::post('/admin/khachhang/update/{id}', 'update') -> name('admin.khachhang.update');

    Route::get('/admin/khachhang/delete/{id}', 'destroy') -> name('admin.khachhang.destroy'); 
    

    Route::get('/khachhang/{id}', 'showAdmin')->name('admin.khachhang.show');

    Route::get('/admin/khachhang/{id}/donhang',  'donhangcuakhachhang')->name('admin.khachhang.donhang');

});
Route::controller(App\Http\Controllers\NhaCCController::class)->group(function(){
    Route::get('/admin/nhacungcap/index','index')->name('admin.nhacungcap.index'); 
    Route::get('/admin/nhacungcap/create', 'create') -> name('admin.nhacungcap.create');
    Route::post('/admin/nhacungcap/store', 'store') -> name('admin.nhacungcap.store');
    
    Route::get('/admin/nhacungcap/edit/{id}', 'edit') -> name('admin.nhacungcap.edit');
    Route::post('/admin/nhacungcap/update/{id}', 'update') -> name('admin.nhacungcap.update');

    Route::get('/admin/nhacungcap/delete/{id}', 'destroy') -> name('admin.nhacungcap.destroy'); 
});
Route::controller(App\Http\Controllers\KhoController::class)->group(function(){
    Route::get('/admin/kho/index','index')->name('admin.kho.index'); 
    Route::get('/admin/kho/create', 'create') -> name('admin.kho.create');
    Route::post('/admin/kho/store', 'store') -> name('admin.kho.store');
    
    Route::get('/admin/kho/edit/{id}', 'edit') -> name('admin.kho.edit');
    Route::post('/admin/kho/update/{id}', 'update') -> name('admin.kho.update');

    Route::get('/admin/kho/delete/{id}', 'destroy') -> name('admin.kho.destroy'); 
    

    Route::get('/kho/{id}', 'showAdmin')->name('admin.kho.show');

    Route::get('/admin/kho/{id}/chitietkho',  'chitietkho')->name('admin.kho.chitietkho');
});

Route::controller(App\Http\Controllers\HoaDonBanController::class) -> group(function(){
    Route::get('/admin/hoadonban/index', 'index') -> name('admin.hoadonban.index');
    Route::get('/admin/hoadonban/detail/{id}', 'detailhoadonban') -> name('admin.hoadonban.detail');

});
Route::controller(App\Http\Controllers\HoaDonNhapController::class) -> group(function(){
    Route::get('/admin/hoadonnhap/index', 'index') -> name('admin.hoadonnhap.index');

    Route::get('/admin/hoadonnhap/create', 'create') -> name('admin.hoadonnhap.create');
    Route::post('/admin/hoadonnhap/store', 'store') -> name('admin.hoadonnhap.store');

    Route::get('/admin/hoadonnhap/detail/{id}', 'detail') -> name('admin.hoadonnhap.detail') ;


});

Route::controller(App\Http\Controllers\ThongKeController::class) -> group(function(){
    Route::get('/admin/thongke/index', 'index') -> name('admin.thongke.index');
    
    Route::post('/admin/thongke/theongay', 'theongay') ->name('admin.thongke.theongay');

    Route::get('/admin/thongke/theothang', 'theothangget') ->name('admin.thongke.theothangget');

    Route::post('/admin/thongke/theothang', 'theothang') ->name('admin.thongke.theothang');

    Route::get('/admin/thongke/khachhang', 'khachhang') ->name('admin.thongke.khachhang');


});




