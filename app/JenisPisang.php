<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPisang extends Model
{
    protected $table = 'jenis_pisang';
    protected $fillable = [
        'nama_pisang',
        'deskripsi'
    ];

    public $timestamps = false;
}
