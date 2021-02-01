<div>
    <div class="form-group">
        <label class="">Provinsi</label>
        <select name="" wire:model="selectedProvinsi" class="form-control">
            <option value=''>Pilih Provinsi</option>
            @foreach($provinsis as $provinsi)
                <option value={{ $provinsi->id }}>{{ $provinsi->nama_provinsi }}</option>
            @endforeach
        </select>
    </div>
    {{-- @if(count($selectedProvinsi) > 0) --}}
        <div class="form-group">
        <label class="">Kota</label>
        <select name="" wire:model="selectedKota" class="form-control">
            <option value=''>Pilih Kota</option>
            @foreach($kotas as $kota)
                <option value={{ $kota->id }}>{{ $kota->nama_kota }}</option>
            @endforeach
        </select>
    </div>
    {{-- @endif --}}
    {{-- @if(count($selectedKota) > 0) --}}
        <div class="form-group">
        <label class="">kecamatan</label>
        <select name="" wire:model="selectedKecamatan" class="form-control">
            <option value=''>Pilih Kecamatan</option>
            @foreach($kecamatans as $kecamatan)
                <option value={{ $kecamatan->id }}>{{ $kecamatan->nama_kecamatan }}</option>
            @endforeach
        </select>
    </div>
    {{-- @endif --}}
    {{-- @if(count($selectedkKecamatan) > 0) --}}
        <div class="form-group">
        <label class="">Desa</label>
        <select name="" wire:model="selectedDesa" class="form-control">
            <option value=''>Pilih <div>Desa</div></option>
            @foreach($desas as $desa)
                <option value={{ $desa->id }}>{{ $desa->nama_desa }}</option>
            @endforeach
        </select>
    </div>
    {{-- @if(count($selectedkDesa) > 0) --}}
        <div class="form-group">
        <label class="">Rw</label>
        <select name="id_rw" wire:model="selectedRw" class="form-control">
            <option value=''>Pilih RW</option>
            @foreach($rws as $rw)
                <option value={{ $rw->id }}>{{ $rw->nama_rw }}</option>
            @endforeach
        </select>
    </div>
    {{-- @endif --}}
</div>