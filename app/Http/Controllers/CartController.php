<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Models\Usser\LoaiSanPhamModel;
use App\Models\Usser\KhachHang;
use App\Models\Usser\DonHang;
use App\Models\Usser\ChiTietDonHang;
use App\Models\Usser\ChiTietKho;

class CartController extends Controller
{
    //
    public function cart(){
        $loaisp =  LoaiSanPhamModel::all();
        $cartItems = \Cart::getContent(); //  lấy toàn bộ nội dung của giỏ hàng hiện tại.
        // dd($cartItems);
        return view('user/cart', ['loaisp' => $loaisp,'cartItems' => $cartItems]);
    }

    public function addCart(Request $request){

        // dd($request -> all());   
        \Cart::add([
            'id' => $request->MaSanPham,
            'name' => $request->TenSanPham,
            'price' => $request->Gia,
            'quantity' => $request->Soluong,
            'attributes' => array(
                'image' => $request->Anh,
            ) 

            
        ]);
        // $cartItems = \Cart::getContent();
        // dd($cartItems);
        // dd(\Cart:: add());
        session()->flash('Success', 'Bạn đã thêm thành công vào giỏ hàng !');

        return redirect()->route('user/cart');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Đã cập nhập thành công giỏ hàng!');

        return redirect()->route('user/cart');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');

        return redirect()->route('user/cart');
    }


    public function checkout(){
        $loaisp =  LoaiSanPhamModel::all();
        $cartItems = \Cart::getContent(); //lấy toàn bộ dữ liệu giỏ hàng lưu vào cartItems
        // dd($cartItems);
        foreach($cartItems as $item) {
            $ctk = ChiTietKho::where('MaSanPham', $item->id) -> first();

            $slkho = $ctk -> SoLuong;
            
            if($item -> quantity > $slkho){
                session()->flash('error', 'Số lượng sản phẩm ' .$item -> name .' hiện không đủ ');

                return redirect()->route('user/cart');
            }
            

        }
        

        return view('user/checkout', ['loaisp' => $loaisp,'cartItems' => $cartItems]);
    }
    
    

    public function checkoutpost(Request $request){
        //  dd($request -> all());
         $cartItems = \Cart::getContent();
        
         $input = $request -> all();
         $kh = new KhachHang();
         $dh = new DonHang();


         $khachhang = KhachHang::where('Email', '=', $input['Email']) ->first();
         // dd($khachhang_id);
       if($khachhang){
            $MaKhachHang = $khachhang -> MaKhachHang;
            //lưu vào đơn hàng
            $dh -> MaKhachHang = $MaKhachHang;
            $dh -> ThanhTien = \Cart::getTotal();
            $dh -> TrangThai = 0;
            //  dd($dh);
            $dh -> save();

            //lưu vào chi tiết đơn hàng
            foreach($cartItems as $item) {
                $ctdh = new ChiTietDonHang();

                 $ctdh -> MaDonHang = $dh -> MaDonHang;
                 $ctdh -> MaSanPham = $item -> id;
                 $ctdh -> SoLuong = $item -> quantity;
                $ctdh -> ThanhTien = $item -> price;
                $ctdh -> save();
                
             
            }
            \Cart::clear();

        }
         else{

            //lưu thông tin vào bảng khách hàng
             $kh -> TenKhachHang = $input['TenKhachHang'];
             $kh -> SoDienThoai = $input['SoDienThoai'];
             $kh -> DiaChi = $input['DiaChi'];
             $kh -> Email = $input['Email'];

            $kh -> save();

            //lưu thông tin vào đơn hàng
            $dh -> MaKhachHang = $kh -> MaKhachHang;
            $dh -> ThanhTien = \Cart::getTotal();
            $dh -> TrangThai = 0;
           
            $dh -> save();
            //lưu thông tin vào chi tiết đơn hàng
            foreach($cartItems as $item) {
                $ctdh = new ChiTietDonHang();

                $ctdh -> MaDonHang = $dh -> MaDonHang;
                $ctdh -> MaSanPham = $item -> id;
                $ctdh -> SoLuong = $item -> quantity;
               $ctdh -> ThanhTien = $item -> price;
               $ctdh -> save();
            }
           \Cart::clear();

           
        }
        session()->flash('success', ' Bạn đã đặt hàng thành công!');
       
         return redirect()->route('home');
    }
    
}
