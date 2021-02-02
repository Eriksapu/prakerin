<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;
class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = ['kode _provinsi','nama_provinsi'];
    public $timestamps = true;

    public function Kota()
    {
        return $this->hasMany('App\Models\Kota','id_provinsi');
    }
}