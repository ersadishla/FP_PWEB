@extends('layouts.app')

@section('content')
<div class="container">
    <header class="masthead text-white text-center">
        <div class="container">
            <div class="row">
              <div class="col-xl-9 mx-auto mb-5 border border-dark rounded p-5 text-dark">
                <h1>PPDB</h1>
                <h2>Kota Bojonegoro</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4"></div>
              <div class="col-12 col-md-2">
                  <a class="btn btn-block btn-lg btn-dark" href="{{ route('login') }}">Masuk!</a>
              </div>
              <div class="col-12 col-md-2">
                  <a class="btn btn-block btn-lg btn-dark" href="{{ route('register') }}">Daftar!</a>
              </div>
              <div class="col-12 col-md-4"></div>
            </div>
            </div>
        </div>
    </header>
</div>
@endsection