<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
<<<<<<< HEAD
    protected $primarykey = 'id_jurusan';
    protected $fillable = ['id_jurusan','id_fakultas','kode_jurusan','nama_jurusan'];
=======
    protected $primaryKey = 'id_jurusan';
    protected $fillabel = ['id_jurusan','id_fakultas','kode_jurusan','nama_jurusan'];
>>>>>>> 86ff937ae72bf379f1c353828a434beab7219eee
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

    public function matkul()
    {
        // return $this->belongsToMany('App\Akademik\Matkul', 'id_jurusan', 'id_jurusan');
        return $this->belongsToMany('App\Akademik\Matkul');
    }
}
