@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{route('kasus.store')}}" method="post">
                            @csrf
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <div class="form-group">
                                <label for="">Pilih RW</label>
                                <select name="id_rw" class="form-control">
                                    @foreach($rw as $data)
                                    <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kasus Reaktif</label>
                                <input type="number" name="reaktif" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kasus Positif</label>
                                <input type="number" name="positif" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kasus Meninggal</label>
                                <input type="number" name="meninggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kasus Sembuh</label>
                                <input type="number" name="sembuh" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
