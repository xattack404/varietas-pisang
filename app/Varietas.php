<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietas extends Model
{
    protected $table = 'varietas_pisang';
    protected $fillable = [
        'nama_pisang',
        'bentuk',
        'panjang',
        'diameter',
        'bentuk_buah',
        'bentuk_daun',
        'bentuk_pohon',
        'gambar',
        'id_varietas'
    ];

    public $timestamps = false;
}
