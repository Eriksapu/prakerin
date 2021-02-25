<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasus;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Kota;
use App\Models\Rw;
use App\Models\Provinsi;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $positif = DB::table('rws')
        ->select('kasuses.positif','kasuses.meninggal','kasuses.sembuh')->join('kasuses',
                'rws.id', '=', 'kasuses.id_rw')->sum('kasuses.positif');
        $meninggal = DB::table('rws')
        ->select('kasuses.positif','kasuses.meninggal','kasuses.sembuh')->join('kasuses',
                'rws.id', '=', 'kasuses.id_rw')->sum('kasuses.meninggal');
        $sembuh = DB::table('rws')
        ->select('kasuses.positif','kasuses.meninggal','kasuses.sembuh')->join('kasuses',
                'rws.id', '=', 'kasuses.id_rw')->sum('kasuses.sembuh');
        $data = Kasus::all();
        $provinsi = DB::table('provinsis')
                    ->select('provinsis.nama_provinsi', 
                    DB::raw('SUM(kasuses.positif) as positif'), 
                    DB::raw('SUM(kasuses.sembuh) as sembuh'), 
                    DB::raw('SUM(kasuses.meninggal) as meninggal'))
                        ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                        ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                        ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
                        ->join('rws', 'desas.id', '=', 'rws.id_desa')
                        ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                        ->groupBy('provinsis.id')
                        ->get();
                         $datadunia = file_get_contents("https://api.kawalcorona.com/");
                         $dunia = json_decode($datadunia, true);
        return view('frontend.index', compact('provinsi', 'data' ,'positif','sembuh','meninggal'));
    }
     public function kota()
    {
        $data = Kasus::all();
        $provinsi = DB::table('kotas')
                    ->select('kotas.nama_kota', 
                    DB::raw('SUM(kasuses.positif) as positif'), 
                    DB::raw('SUM(kasuses.sembuh) as sembuh'), 
                    DB::raw('SUM(kasuses.meninggal) as meninggal'))
                        ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                        ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
                        ->join('rws', 'desas.id', '=', 'rws.id_desa')
                        ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                        ->groupBy('kotas.id')
                        ->get();
        return view('frontend.index', compact('kota', 'data'));
    }
}