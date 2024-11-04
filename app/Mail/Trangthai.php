<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Trangthai extends Mailable
{
    use Queueable, SerializesModels;

    public $dh;
    public $kh;
    public $statusText;

    public function __construct($dh,$kh,$statusText)
    {
        $this->dh = $dh;
        $this->kh = $kh;
        $this->statusText = $statusText;
    }

    public function build()
    {
        $template = '';

        switch ($this->statusText) {
            case 'Đã xác nhận':
                $template = 'emails.donhang.xacnhan';
                $subject = 'Đơn hàng của bạn đã được xác nhận ';
                break;
            case 'Đang giao':
                $template = 'emails.donhang.danggiao';
                $subject = 'Đơn hàng của bạn đang được giao ';
                break;
            case 'Giao thành công':
                $template = 'emails.donhang.giaothanhcong';
                $subject = 'Đơn hàng của bạn đã giao thành công ';
                break;
            case 'Đã hủy':
                $template = 'emails.donhang.dahuy';
                $subject = 'Đơn hàng của bạn đã được hủy ';
                break;
        }

        return $this->subject($subject)
                    ->with(['dh' => $this->dh, 'kh' => $this->kh])
                    ->view($template);
    }
}
