<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaKhachHang';
    protected $table='khachhang';
    protected $fillable=[
        'MaKhachHang', 
        'TenKhachHang', 
        'SoDienThoai', 
        'DiaChi', 
        'Email', 
        
    ];
    
    public function donhang()
    {
        return $this->hasMany(DonHang::class, 'MaKhachHang');
    }
}
