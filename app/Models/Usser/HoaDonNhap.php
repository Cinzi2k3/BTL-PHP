<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonNhap extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaHoaDonNhap';
    protected $table = 'hoadonnhap';
    protected $fillable = [
        'MaHoaDonNhap',
        'MaNhaCungCap',
        'ThanhTien',
    ];

    public function chitiethoadonnhap()
    {
        return $this -> hasMany(ChiTietHoaDonNhap::class, 'MaHoaDonNhap');
    }

    public function nhacungcap()
    {
        return $this -> belongsTo(NhaCungCap::class, 'MaNhaCungCap');
    }
}
