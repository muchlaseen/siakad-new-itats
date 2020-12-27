<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $primaryKey = 'id_jurusan';
    protected $fillabel = ['id_jurusan','id_fakultas','kode_jurusan','nama_jurusan'];
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

    // public function user()
    // {
    //     return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    //     //                          model           foreignkey      pemilik key
    // }

    public function comments()
    {
        return $this->hasMany('App\Akademik\Matkul', 'id_jurusan', 'id_jurusan');
    }
}
