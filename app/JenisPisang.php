<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPisang extends Model
{
    protected $table = 'jenis_pisang';    
    protected $fillable = [
        'nama_pisang',
        'bentuk',
        'panjang',
        'diameter',
        'bentuk_luar',
        'gambar',
        'id_variates'
    ];

    public $timestamps = false;
}