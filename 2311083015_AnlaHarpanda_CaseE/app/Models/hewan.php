<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class hewan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_hewan', 'jenis_hewan', 'ras', 'tanggal_lahir', 
        'nama_pemilik', 'kontak_pemilik', 'status'
    ];
    use softDeletes;
}
