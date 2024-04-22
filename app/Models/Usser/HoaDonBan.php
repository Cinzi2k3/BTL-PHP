<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonBan extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaHoaDonBan';
    protected $table = 'hoadonban';
    protected $fillable  = [
        'MaHoaDonBan',
        'MaKhachHang',
        'ThanhTien',
    ];

    public function chitiethoadonban()
    {
        return $this->hasMany(ChiTietHoaDonBan::class, 'MaChiTietHoaDonBan');
    }

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKhachHang');
    }


}
