<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaChiTietDonHang';
    protected $table='chitietdonhang';
    protected $fillable=[
        'MaChiTietDonHang', 
        'MaDonHang', 
        'MaSanPham', 
        'SoLuong', 
        'ThanhTien', 
       
    ];
    public function donhang()
    {
        return $this->belongsTo(DonHang::class, 'MaDonHang');
    }

    public function sanpham()
    {
        return $this->belongsTo(SanphamModel::class, 'MaSanPham');
    }
}
