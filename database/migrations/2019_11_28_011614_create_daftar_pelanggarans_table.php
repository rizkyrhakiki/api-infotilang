<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarPelanggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pelanggarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_sim');
            $table->string('lokasi_tilang');
            $table->string('lokasi_sidang');
            $table->string('nama_polisi');
            $table->date('tanggal_sidang');
            $table->string('plat_nomor');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pelanggarans');
    }
}
