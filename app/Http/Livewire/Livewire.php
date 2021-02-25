<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Rw;

class Livewire extends Component
{
    public $provinsis;
    public $kotas;
    public $kecamatans;
    public $desas;
    public $rws;

    public $selectedProvinsi = null;
    public $selectedKota = null;
    public $selectedKecamatan = null;
    public $selectedDesa = null;
    public $selectedRw = null;

    public function mount($selectedRw = null)
    {
        $this->provinsis = Provinsi::all();
        $this->kotas = collect();
        $this->kecamatans = collect();
        $this->desas = collect();
        $this->rws = collect();
        $this->selectedRw = $selectedRw;

    if (!is_null($selectedRw))
    {
        $rw = Rw::with('desa.kecamatan.kota.provinsi')->find($selectedRw);
        if($rw)
        {
            $this->rws = Rw::where('id_desa', $rw->id_desa)->get();
            $this->desas = Desa::where('id_kecamatan',$rw->desa->id_kecamatan)->get();
            $this->kecamatans = Kecamatan::where('id_kota',$rw->desa->kecamatan->id_kota)->get();
            $this->kotas = Kota::where('id_provinsi',$rw->desa->kecamatan->kota->id_provinsi)->get();
            $this->SelectedProvinsi = $rw->desa->kecamatan->kota->id_provinsi;
            $this->SelectedKota = $rw->desa->kecamatan->id_kota;
            $this->SelectedKecamatan = $rw->desa->id_kecamatan;
            $this->SelectedDesa = $rw->id_desa;
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
        $this->selectedRw = Null;
    }

    public function updatedSelectedKota($kota)
    {
        $this->kecamatans = Kecamatan::where('id_kota', $kota)->get();
        $this->selectedDesa = NULL;
        $this->selectedRw = null;
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->desas = Desa::where('id_kecamatan', $kecamatan)->get();
        $this->selectedRw = null;
    }

    public function updatedSelectedDesa($desa)
    {
        if (!is_null($desa)) {
        $this->rws = Rw::where('id_desa', $desa)->get();
        } else {
            $this->selectedRw = null;   
        }
    }
}