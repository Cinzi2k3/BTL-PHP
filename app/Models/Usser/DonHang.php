<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DonHang extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaDonHang';
    protected $table='donhang';
    protected $fillable=[
        'MaDonHang', 
        'MaKhachHang', 
        'NgayDat', 
        'TrangThai', 
        'ThanhTien',
   
        
    ];
    public function chitietdonhang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'MaDonHang');
    }

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKhachHang');
    }
}
