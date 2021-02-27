<?php

namespace App\Http\Livewire;

use App\Models\Rw;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Kasus;
use Livewire\Component;

class Livewire extends Component
{
    public $provinsis;
    public $kotas;
    public $kecamatans;
    public $desas;
    public $rws;
    public $idk;
    public $kasus1;

    public $selectedProvinsi = null;
    public $selectedKota = null;
    public $selectedKecamatan = null;
    public $selectedDesa = null;
    public $selectedRw = null;

    public function mount($selectedRw = null, $idk = null)
    {
        $this->provinsis = Provinsi::all();
        $this->kotas= Kota::whereHas('provinsi', function ($query) {
            $query->whereId(request()->input('id_provinsi', 0));
        })->pluck('nama_kota', 'id');
        $this->kecamatans = Kecamatan::whereHas('kota', function ($query) {
            $query->whereId(request()->input('id_kota', 0));
        })->pluck('nama_kecamatan', 'id');
        $this->desas = Desa::whereHas('kecamatan', function ($query) {
            $query->whereId(request()->input('id_kecamatan', 0));
        })->pluck('nama_desa', 'id');
        $this->rws = Rw::whereHas('desa', function ($query) {
            $query->whereId(request()->input('id_desa', 0));
        })->pluck('nama_rw', 'id');
        $this->selectedRw = $selectedRw;
        $this->idk = $idk;
        if (!is_null($idk)) {
            $this->kasus1 = Kasus::findOrFail($idk);
        }

        if (!is_null($selectedRw)) {
            $rw = Rw::with('desa.kecamatan.kota.provinsi')->find($selectedRw);
            if ($rw) {
                $this->rws = Rw::where('id_desa', $rw->id_desa)->get();
                $this->desas = Desa::where('id_kecamatan', $rw->desa->id_kecamatan)->get();
                $this->kecamatans = Kecamatan::where('id_kota', $rw->desa->kecamatan->id_kota)->get();
                $this->kotas = Kota::where('id_provinsi', $rw->desa->kecamatan->kota->id_provinsi)->get();
                $this->selectedProvinsi =$rw->desa->kecamatan->kota->id_provinsi;
                $this->selectedKota = $rw->desa->kecamatan->id_kota;
                $this->selectedKecamatan = $rw->desa->id_kecamatan;
                $this->selectedDesa = $rw->id_desa;
            }
        }
    }

    public function render()
    {
        return view('livewire.kasus');
    }

    public function updatedSelectedProvinsi($provinsi)
    {
        $this->kotas = Kota::where('id_provinsi', $provinsi)->get();
        $this->selectedKecamatan = NULL;
        $this->selectedDesa = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKota($kota)
    {
        $this->kecamatans = Kecamatan::where('id_kota', $kota)->get();
        $this->selectedDesa = NULL;
        $this->selectedRw = NULL;
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->desas = Desa::where('id_kecamatan', $kecamatan)->get();
        $this->selectedRw = NULL;
    }
    public function updatedSelectedDesa($desa)
    {
        if (!is_null($desa)) {
            $this->rws = Rw::where('id_desa', $desa)->get();
        }else{
            $this->selectedRw = NULL;
        }
    }

}