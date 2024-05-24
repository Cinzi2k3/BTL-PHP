<?php

namespace App\Models\Usser;

use App\Models\Usser\SanphamModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonNhap extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaChiTietHoaDonNhap';
    protected $table = 'chitiethoadonnhap';
    protected $fillable = [
        'MaChiTietHoaDonNhap',
        'MaHoaDonNhap',
        'MaSanPham',
        'DonGia',
        'SoLuong',

    ];

    public function hoadonnhap(){
        return $this -> belongsTo(HoaDonNhap::class, 'MaHoaDonNhap');
    }
    public function sanpham(){
        return $this -> belongsTo(SanphamModel::class, 'MaSanPham');
    }
}
