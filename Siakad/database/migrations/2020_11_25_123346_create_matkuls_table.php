<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatkulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkuls', function (Blueprint $table) {
            $table->integer('kode_mk')->primary();
            $table->unsignedInteger('id_jurusan')->foreign('id_jurusan')->references('id_jurusan')->on('jurusans')->onDelete('cascade');
            $table->string('nama_mk');
            $table->integer('sks');
            $table->integer('semester');
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
        Schema::dropIfExists('matkuls');
    }
}
