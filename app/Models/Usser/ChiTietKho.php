<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietKho extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaChiTietKho';
    protected $table='chitietkho';
    protected $fillable=[
        'MaChiTietKho', 
        'MaKho', 
        'MaSanPham', 
        'SoLuong', 
       
    ];
    public function kho()
    {
        return $this->belongsTo(Kho::class, 'MaKho');
    }

    public function sanpham()
    {
        return $this->belongsTo(SanphamModel::class, 'MaSanPham');
    }
}
