<?php

namespace App\Models\Usser;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanphamModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaSanPham';
    protected $table='sanpham';
    protected $fillable=[
        'MaSanPham', 
        'MaLoai_id', 
        'TenSanPham', 
        'Anh',  
        'Mota', 
        'SoLuong',
        'Gia',
    ];
    public function thongsokythuat()
    {
        return $this->hasOne(ThongSoKyThuat::class, 'MaSanPham');
    }
    public function chitietdonhang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'MaSanPham');
    }
    public function loaisanpham()
    {
    return $this->belongsTo(LoaiSanPhamModel::class,'MaLoai_id');
    }
    public function chitietkho()
    {
        return $this->hasMany(ChiTietKho::class , 'MaSanPham');
    }
    public function kho()
    {
        return $this->belongsTo(Kho::class);
    }
    
    
}