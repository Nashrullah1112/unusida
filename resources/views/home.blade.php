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

                    You are logged in! as {{ Auth::user()->role }}
                    <br>

                    @if (Auth::user()->verified == 0)
                    <p>Akun anda belum di verifikasi</p>
                    @else
                    @switch(Auth::user()->role)
                    @case('admin')
                    <a href="{{ route('admin.dashboard') }}">Go to Dashboard</a>
                    @break
                    @case('dosen')
                    <a href="{{ route('dosen.dashboard') }}">Go to Dashboard</a>
                    @break
                    @case('mahasiswa')
                    <a href="{{ route('mahasiswa.dashboard') }}">Go to Dashboard</a>
                    @break
                    @default
                    @endswitch
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
