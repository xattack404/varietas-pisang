<?php

namespace App;

use App\JenisPisang;
use Illuminate\Database\Eloquent\Model;

class Varietas extends Model
{
    protected $table = 'varietas_pisang';
    protected $fillable = [
        'warna',
        'panjang',
        'diameter',
        'bentuk_buah',
        'bentuk_daun',
        'bentuk_pohon',
        'gambar',
        'id_jenis'
    ];

    public $timestamps = false;
    public function RelasiJenisPisang()
    {

        return $this->belongsTo(JenisPisang::class, 'id_jenis');
    }
}
