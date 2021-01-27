@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="btn btn-info">
                    <b>Data Desa</b> 
                    </div>
                    <a href="{{route('desa.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($desa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_desa}}</td>
                                <td>{{$data->kecamatan->nama_kecamatan}}</td>
                                <td>
                                    <form action="{{route('desa.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-primary" href=" {{ route('desa.edit', $data->id) }} ">Edit</a>
                                        <a class="btn btn-warning" href=" {{ route('desa.show', $data->id) }} ">Show</a>
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection