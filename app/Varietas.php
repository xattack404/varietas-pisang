<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietas extends Model
{
    protected $table = 'varietas';
    protected $fillable = [
        'nama_pisang',
        'deskripsi'
    ];

    public $timestamps = false;
}
