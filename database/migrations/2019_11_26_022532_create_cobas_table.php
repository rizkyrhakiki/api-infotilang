<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('plat_nomor');
//            $table->string('provinsi');
//            $table->string('kab');
//            $table->string('lokasi');
//            $table->string('tgl_ditilang');
//            $table->string('pelanggaran');
//            $table->string('lokasi_sidang');
//            $table->string('nama_polisi');
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
        Schema::dropIfExists('cobas');
    }
}
