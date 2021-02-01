@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="btn btn-info">
                    <b>Data Kota</b> 
                    </div>
                    <a href="{{route('kota.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr class="bg-info">
                                <th>No</th>
                                <th>Kode Kota</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @php $no=1; @endphp
                            @foreach($kota as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_kota}}</td>
                                <td>{{$data->nama_kota}}</td>
                                <td>{{$data->provinsi->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-primary" href=" {{ route('kota.edit', $data->id) }} ">Edit</a>
                                        <a class="btn btn-warning" href=" {{ route('kota.show', $data->id) }} ">Show</a>
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