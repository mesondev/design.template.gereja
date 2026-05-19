<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pernikahan extends Model
{
    //
    protected $fillable = ['pria_id','wanita_id','tanggal_nikah','pendeta'];
}
