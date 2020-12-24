<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $primarykey = 'id_jurusan';
    protected $guard = [];
    protected $table = 'jurusans';

    public function user()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
        //                          model           foreignkey      pemilik key
    }

    public function comments()
    {
        return $this->hasMany('App\Akademik\Matkul', 'id_jurusan', 'id_jurusan');
    }
}
