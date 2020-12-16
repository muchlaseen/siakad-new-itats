<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $primarykey = 'kode_mk';

    protected $guard = [];

    public function roles()
    {
        return $this->belongsToMany('App\Akademik\Jurusan', 'jurusans', 'id_jurusan', 'id_jurusan');
    }
}
