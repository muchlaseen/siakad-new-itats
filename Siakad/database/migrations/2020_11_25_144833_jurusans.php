<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jurusans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->integer('id_jurusan')->primary();
            $table->integer('id_fakultas');
            $table->integer('kode_jurusan');
            $table->string('nama_jurusan');
            $table->timestamps();

            $table->foreign('id_fakultas')->references('id_fakultas')->on('fakultass')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusans');
    }
}
