<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'tabel_layanan';
    protected $primaryKey = 'id_layanan';
    protected $fillable =[
        'judul',
        'gambar',
        'deskripsi',
        'added_by'
    ];
}
