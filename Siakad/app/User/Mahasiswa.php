<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['npm', 'id_jurusan', 'nama', 'alamat', 'jenis_kelamin', 'email', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'agama'];
    protected $primaryKey = 'npm';
}
