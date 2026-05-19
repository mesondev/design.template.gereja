<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    //
        protected $fillable = [
        'nama','jenis_kelamin','alamat','no_hp','tanggal_lahir','foto'
    ];
        public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }

        public function baptis()
    {
        return $this->hasOne(Baptis::class);
    } 

        public function pernikahanPria()
    {
        return $this->hasOne(Pernikahan::class,'pria_id');
    }


        public function pernikahanWanita()
    {
        return $this->hasOne(Pernikahan::class,'wanita_id');
    }

}
