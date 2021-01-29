@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="btn btn-info"
                    <b>Data Rw</b> 
                    </div>
                    <a href="{{route('rw.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>No Rw</th>
                                <th>Nama Desa</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($rw as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_rw}}</td>
                                <td>{{$data->desa->nama_desa}}</td>
                                <td>
                                    <form action="{{route('rw.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-primary" href=" {{ route('rw.edit', $data->id) }} ">Edit</a> ⁞
                                        <a class="btn btn-warning" href=" {{ route('rw.show', $data->id) }} ">Show</a> ⁞
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