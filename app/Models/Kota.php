<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;
use App\Models\Kecamatan;
class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['kode_kota','nama_kota','id_provinsi'];
    public $timestamps = true;

    public function Provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi','id_provinsi');
    }

    public function Kecamatan()
    {
        return $this->hasMany('App\Models\Kecamatan','id_kota');
    }
}