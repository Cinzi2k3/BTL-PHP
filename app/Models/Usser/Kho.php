<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaKho';
    protected $table='kho';
    protected $fillable=[
        'MaKho', 
        'TenKho', 
        'DiaChi', 
        
    ];
    
    public function chitietkho()
    {
        return $this->hasMany(ChiTietKho::class, 'MaKho');
    }
    public function sanpham()
    {
        return $this->hasOne(SanphamModel::class);
    }
}
