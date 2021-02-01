@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data kasus
                    <a href="{{route('kasus.create')}}"
                       class="btn btn-primary float-right">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr class="bg-info">
                                <th>No</th>
                                <th>Lokasi</th>
                                <th>Jumlah Reaktif</th>
                                <th>Jumlah Positif</th>
                                <th>Jumlah Sembuh</th>
                                <th>Jumlah Meninggal</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @php $no=1; @endphp
                            @foreach($kasus as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    RW <b>{{$data->rw->nama_rw}}</b>, {{$data->rw->desa->nama_desa}}<br>
                                    {{$data->rw->desa->kecamatan->nama_kecamatan}}<br> {{$data->rw->desa->kecamatan->kota->nama_kota}},
                                    {{$data->rw->desa->kecamatan->kota->provinsi->nama_provinsi}}
                                </td>
                                <td>{{$data->reaktif}}</td>
                                <td>{{$data->positif}}</td>
                                <td>{{$data->sembuh}}</td>
                                <td>{{$data->meninggal}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>
                                    <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                        @csrf @method('delete')
                                        <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('kasus.show',$data->id)}}" class="btn btn-warning btn-sm">Show</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ga Akan Nyesel Di Hapus ?')">Delete</button>
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