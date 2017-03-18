<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalMatakuliahh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matakuliahh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswaa_id')->unsigned();
            $table->foreign('mahasiswaa_id')->references('id')->on('mahasiswaa');
            $table->integer('ruangan_id')->unsigned();
            $table->foreign('ruangan_id')->references('id')->on('ruangan');
            $table->integer('dosen_matakuliah_id')->unsigned();
            $table->foreign('dosen_matakuliah_id')->references('id')->on('dosen_matakuliah');
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
        Schema::drop('jadwal_matakuliahh');
    }
}
