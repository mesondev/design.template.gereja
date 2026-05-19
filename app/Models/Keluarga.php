<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    //
    protected $fillable = ['no_kk','nama_kepala','alamat','sektor','no_hp'];

    public function jemaat()
    {
        return $this->hasMany(Jemaat::class);
    }
}
