<?php

namespace App\Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $primarykey = 'id_jurusan';
    protected $guard = [];

    public function user()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
        //                          model           foreignkey      pemilik key
    }
}
