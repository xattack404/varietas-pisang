<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPisang extends Model
{
    protected $table = 'jenis_pisang';
    protected $fillable = [
        'bentuk',
        'panjang',
        'diameter',
        'bentuk_luar',
        'bentuk_daun',
        'bentuk_pohon',
        'gambar',
        'id_variates'
    ];

    public $timestamps = false;
}
