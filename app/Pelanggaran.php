<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $table='daftar_pelanggarans';

    protected $fillable = [
      'no_sim','lokasi_tilang','lokasi_sidang', 'nama_polisi', 'tanggal_sidang', 'plat_nomor',
    ];

}
