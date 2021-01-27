@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                <div class="btn btn-info">
                    <b>Data Kasus</b> 
                    </div>
                    <a href="{{route('kasus.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Reaktif</th>
                                <th>Positif</th>
                                <th>Meninggal</th>
                                <th>Sembuh</th>
                                <th>Tanggal</th>
                                <th>RW</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kasus as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->reaktif}} Orang</td>
                                <td>{{$data->positif}} Orang</td>
                                <td>{{$data->meninggal}} Orang</td>
                                <td>{{$data->sembuh}} Orang</td>
                                <td>{{$data->tanggal}}</td>
                                <td>Rw {{$data->rw->nama_rw}}</td>
                                <td>
                                    <form action="{{route('kasus.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-warning" href=" {{ route('kasus.show', $data->id) }}">Show</a>|
                                        <a class="btn btn-info" href=" {{ route('kasus.edit', $data->id) }}">Edit</a>|
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
