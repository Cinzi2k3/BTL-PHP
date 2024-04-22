<?php

namespace App\Models\Usser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongSoKyThuat extends Model
{
    use HasFactory;

    protected $primaryKey = 'MaThongSoKyThuat';
    protected $table = 'thongsokythuat';
    protected $fillable  = [
        'MaThongSoKyThuat', 
        'MaSanPham', 
        'KichCo',
        'DoPhanGiai',
        'LoaiManHinh',  
        'HeDieuHanh', 
        'ChatLieuChanDe', 
        'ChatLieuVienTiVi',
        'Anh', 
        
    ];
    public function sanpham()
    {
        return $this->belongsTo(SanphamModel::class, 'MaSanPham');
    }
}
