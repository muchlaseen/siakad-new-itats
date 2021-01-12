<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $primaryKey = 'id_jurusan';
    protected $fillable = ['id_jurusan','id_fakultas','kode_jurusan','nama_jurusan'];
    protected $guard = [];
    protected $table = 'jurusans';

    public function fakultas()
    {
        return $this->belongsTo('App\Akademik\Fakultas', 'id_fakultas');
    }

    public function mahasiswa()
    {
        return $this->hasMany('App\User\Mahasiswa');
    }
    public function matkul()
    {
        return $this->belongsToMany('App\Akademik\Matkul');
    }
}
