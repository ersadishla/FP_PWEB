@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->siswa)
                    <div class="card-title">
                        Selamat Datang, Silahkan Cek Biodata
                    </div>
                    <a class="btn btn-outline-primary" href="{{ route('siswa.show', Auth::user()->siswa->id) }}">Biodata</a>
                    @elseif(!Auth::user()->siswa)
                    <div class="card-title">
                        Selamat Datang, Silahkan Isi Biodata
                    </div>
                    <a class="btn btn-outline-primary" href="/siswa/create">Isi</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
