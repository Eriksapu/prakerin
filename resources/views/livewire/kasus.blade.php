<div>
    <div class="form-group">
        <label for="provinsi">Provinsi</label>
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>Pilih Provinsi</option>
                @foreach($provinsi as $provinsis)
                    <option value="{{ $provinsis->id }}">{{ $provinsis->nama_provinsi }}</option>
                @endforeach
            </select>
    </div> 

        <div class="form-group">
    {{-- @if (!is_null($selectedProvinsi) > 0) --}}
            <label for="kota">Kota</label>
                <select wire:model="selectedKota" class="form-control">
                    <option value="" selected>Pilih Kota</option>
                    @foreach($kota as $kotas)
                        <option value="{{ $kotas->id }}">{{ $kotas->nama_kota }}</option>
                    @endforeach
                </select>
    {{-- @endif --}}
        </div>
        <div class="form-group">
    {{-- @if (!is_null($selectedKota) > 0) --}}
            <label for="kecamatan">Kecamatan</label>
                <select wire:model="selectedKecamatan" class="form-control">
                    <option value="" selected>Pilih Kecamatan</option>
                    @foreach($kecamatan as $kecamatans)
                        <option value="{{ $kecamatans->id }}">{{ $kecamatans->nama_kecamatan }}</option>
                    @endforeach
                </select>
    {{-- @endif --}}
        </div>
        <div class="form-group">
    {{-- @if (!is_null($selectedKecamatan) > 0) --}}
            <label for="desa" >Desa</label>
                <select wire:model="selectedDesa" class="form-control">
                    <option value="" selected>Pilih Desa</option>
                    @foreach($desa as $desas)
                        <option value="{{ $desas->id }}">{{ $desas->nama_desa }}</option>
                    @endforeach
                </select>
    {{-- @endif --}}
        </div>
        <div class="form-group">
    {{-- @if (!is_null($selectedDesa) > 0) --}}
            <label for="rw" >RW</label>
                <select wire:model="selectedRw" class="form-control" name="id_rw">
                    <option value="" selected>Pilih RW</option>
                    @foreach($rw as $rws)
                        <option value="{{ $rws->id }}">{{ $rws->nama_rw }}</option>
                    @endforeach
                </select>
    {{-- @endif --}}
        </div>
</div>