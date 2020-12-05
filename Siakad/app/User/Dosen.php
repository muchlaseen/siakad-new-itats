<?php

namespace App\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    // protected $guarded = [];
    protected $primaryKey = 'nim';


}
