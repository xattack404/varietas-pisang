<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietas extends Model
{
    protected $table = 'varietas';    
    protected $fillable = [
        'bentuk_daun',
        'bentuk_pohon',
        'deskripsi'
    ];

    public $timestamps = false;
}
