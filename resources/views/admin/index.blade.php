@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ini halaman admin<br><br>
                    Masuk halaman Provinsi<hr>
                    <a href="{{route('provinsi.index')}}" class="btn btn-primary center">klik disini</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
