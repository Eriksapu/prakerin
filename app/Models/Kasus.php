<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    public function Rw(){
        return $this->belongsTo('App\Models\Rw','id_rw');
    }
}
