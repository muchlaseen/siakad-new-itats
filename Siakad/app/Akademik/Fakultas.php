<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $primarykey = 'id_fakultas';
    protected $guard = [];

    public function roles()
    {
        return $this->belongsToMany(Jurusan::class, 'jurusans');
    }

    public function comments()
    {
        return $this->hasMany(Jurusan::class, 'id_fakultas', 'id_fakultas');
    }
}
