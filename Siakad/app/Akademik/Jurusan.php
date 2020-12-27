<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $primarykey = 'id_jurusan';
    protected $fillable = ['id_jurusan','id_fakultas','kode_jurusan','nama_jurusan'];
    protected $guard = [];
    protected $table = 'jurusans';

    public function fakultas()
    {
        return $this->belongsTo('App\Akademik\Fakultas', 'id_fakultas');
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
