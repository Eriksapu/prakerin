<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function Desa(){
        return $this->hasMany('App\Models\Desa','id_kecamatan');
    }
    public function Kota(){
        return $this->belongsTo('App\Models\Kota','id_kota');
    }
}
