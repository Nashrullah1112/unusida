@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>

                    <a href="{{ route('admin.dashboard') }}">Admin</a> <br>
                    <a href="{{ route('dosen.dashboard') }}">Dosen</a> <br>
                    <a href="{{ route('mahasiswa.dashboard') }}">Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
