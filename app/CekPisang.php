<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CekPisang extends Model
{
    protected $table = 'varietas_pisang';
    protected $fillable = [
        'warna',             
        'panjang',            
        'diameter',           
        'bentuk_buah',        
        'bentuk_daun',        
        'bentuk_pohon',       
        'id_jenis'        
    ];

    public $timestamps = false;
}
