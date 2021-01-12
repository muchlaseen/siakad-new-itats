<?php

namespace App\Akademik;

use App\Jurusan_Matkul;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $primaryKey = 'kode_mk';
    protected $guard = [];
    protected $fillable = ['kode_mk','id_jurusan','nama_mk','sks','semester'];
    public function jurusan()
    {
        return $this->belongsToMany('App\Akademik\Jurusan');
    }
}
