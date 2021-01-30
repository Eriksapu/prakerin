@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data kasus
                </div>
                <div class="card-body">
                    <form action="{{route('kasus.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                @livewire('dropdowns')
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Reaktif</label>
                                    <input type="number" name="reaktif" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">positif</label>
                                    <input type="number" name="positif" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">sembuh</label>
                                    <input type="number" name="sembuh" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">meninggal</label>
                                    <input type="number" name="meninggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection