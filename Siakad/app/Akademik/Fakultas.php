<?php

namespace App\Akademik;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $guard = [];
    protected $fillable = ['id_fakultas','nama_fakultas'];
    protected $primaryKey = 'id_fakultas';
    protected $table = 'fakultass';

    public function jurusan()
    {
        return $this->hasMany('App\Akademik\Jurusan');
    }

    // public function roles()
    // {
    //     return $this->belongsToMany(Jurusan::class, 'jurusans');
    // }

    // public function comments()
    // {
    //     return $this->hasMany(Jurusan::class, 'id_fakultas', 'id_fakultas');
    // }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
