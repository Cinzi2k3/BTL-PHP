<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    public $dh; // Đơn hàng
    public $kh; // Khách hàng mới
    public $khachhang; // Khách hàng cũ

    public function __construct($dh, $khachhang = null, $kh = null)
    {
        $this->dh = $dh;
        $this->khachhang = $khachhang;
        $this->kh = $kh;
    }

    public function build()
    {
        return $this->view('emails.order_placed')
            ->subject('Đặt hàng thành công') // Thay đổi tiêu đề ở đây
            ->with([
                'dh' => $this->dh,
                'khachhang' => $this->khachhang,
                'kh' => $this->kh,
            ]);
    }
}
