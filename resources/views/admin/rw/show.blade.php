@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Data Rw
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama desa</label>
                                <input type="text" name="id_kota" value="{{$rw->desa->nama_desa}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">No Rw</label>
                                <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <a href=" {{ route('rw.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection