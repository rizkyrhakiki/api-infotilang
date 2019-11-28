<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    protected $table = 'cobas';
    protected $fillable = [
        'nama', 'plat_nomor',
//        'provinsi','kab','lokasi','tgl_ditilang','pelanggaran','lokasi_sidang', 'nama_polisi'
    ];
}
