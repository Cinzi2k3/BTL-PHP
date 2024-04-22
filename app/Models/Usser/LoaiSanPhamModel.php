<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPhamModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaLoai_id';
    protected $table = 'loaisanpham';
    protected $fillable = [
        'MaLoai_id', 
        'TenLoai',
    ];

}
