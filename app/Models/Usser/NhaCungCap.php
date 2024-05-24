<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaNhaCungCap';
    protected $table = 'nhacungcap';
    protected $fillable = [
        'MaNhaCungCap',
        'TenNhaCungCap',
        'DiaChi',
        'SoDienThoai',
    ];

    
}
