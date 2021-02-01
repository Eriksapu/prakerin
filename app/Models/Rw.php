<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $fillable = ['nama_rw','id_desa'];
    public $timestamps = true;

    public function desa()
    {
        return $this->belongsTo('App\Models\Desa','id_desa');
    }

    public function kasus()
    {
        return $this->hasMany('App/Models/Kasus','id_rw');
    }
}