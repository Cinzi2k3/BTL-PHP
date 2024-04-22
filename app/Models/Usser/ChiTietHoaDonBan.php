<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonBan extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaChiTietHoaDonBan';
    protected $table = 'chitiethoadonban';
    protected $fillable  = [
        'MaChiTietHoaDonBan',
        'MaHoaDonBan',
        'MaSanPham',
        'SoLuong',
        'ThanhTien',
    ];

    public function hoadonban()
    {
        return $this->belongsTo(HoaDonBan::class, 'MaHoaDonBan');
    }

    public function sanpham()
    {
        return $this->belongsTo(SanphamModel::class, 'MaSanPham');
    }
}
