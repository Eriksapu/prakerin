<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use Validator; 

class ProvinsiController extends Controller
{
    
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $prov = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'
        ];
        return response()->json($prov, 200);
    }

   
    // public function create()
    // {
        
    // }

   
    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $prov = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data berhasil di tambah'
        ];
        return response()->json($prov, 200);
    }

    
    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();
        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Provinsi!',
                'data'    => $provinsi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
        return response()->json($provinsi, 200);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ],[
            'kode_provinsi.required' => "Mohon Masukan Kode Provinsi",
            'nama_provinsi.required' => "Mohon Masukan Nama Provinsi",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validator->errors(),
                'message' => 'silakan isi bidang yang kosong',
            ], 400);
        }else {
            $provinsi = Provinsi::whereId($id)->update([
                'kode_provinsi' => $request->kode_provinsi,
                'nama_provinsi' => $request->nama_provinsi,
            ]);

            if ($provinsi) {
                return response()->json([
                    'success' => true,
                    'message' => 'data berhasil diUpdate!',
                ], 200); 
            }else{
               return response()->json([
                    'success' => false,
                    'message' => 'data gagal diUpdate!',
               ], 500); 
            }
        }
    }

    
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'data berhasil dihapus!',
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'data gagal dihapus',
            ], 500);
        }
    }
    }