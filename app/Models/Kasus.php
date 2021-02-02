<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;
use App\Models\Rw;


class Kasus extends Model
{
    use HasFactory;

    protected $fillable = ['id_rw','reaktif','positif','sembuh','meninggal','tanggal'];
    public $timestamps = true;

    public function Rw()
    {
        return $this->BelongsTo('App\Models\Rw','id_rw');
    }
}