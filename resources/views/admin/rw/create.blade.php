@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Rw
                    </div>
                    <div class="card-body">
                        <form action="{{route('rw.store')}}" method="post">
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
                                <label for="">Pilih Desa</label>
                                <select name="id_desa" class="form-control">
                                    @foreach($desa as $data)
                                    <option value="{{$data->id}}">{{$data->nama_desa}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">No Rw</label>
                                <input type="text" name="nama_rw" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('rw.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection