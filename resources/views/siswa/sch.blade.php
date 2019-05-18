@extends('layouts.app')

@section('content')
	<h1>Isi Data Sekolah Siswa</h1>
	<form method="POST" action="/siswa/editsch/{{$siswa->id}}">
		@csrf
		<div class="card card-body col-sm-6">
		<div class="row col-sm-12 form-group">
		  <label for="sekolah_asal">Sekolah Asal:</label>
		  <input type="text" class="form-control" name="sekolah_asal" value="{{$siswa->sekolah_asal}}" />
		</div>
		<div class="row col-sm-12 form-group">
		  <label for="sekolah1">Pilihan 1:</label>
			<select name="sekolah1" id="sekolah1" class="form-control">
			  @foreach($sekolah as $sekol)
			    <option value="{{ $sekol->nama }}">{{ $sekol->nama }}</option>
			  @endforeach
			</select>
		</div>
		<div class="row col-sm-12 form-group">
		  <label for="sekolah2">Pilihan 2:</label>
			<select name="sekolah2" id="sekolah2" class="form-control">
			  @foreach($sekolah as $sekol)
			    <option value="{{ $sekol->nama }}">{{ $sekol->nama }}</option>
			  @endforeach
			</select>
		</div>
		<div class="row col-sm-12 form-group">
		  <label for="sekolah3">Pilihan 3:</label>
			<select name="sekolah3" id="sekolah3" class="form-control">
			  @foreach($sekolah as $sekol)
			    <option value="{{ $sekol->nama }}">{{ $sekol->nama }}</option>
			  @endforeach
			</select>
		</div>
		<div class="container row">
		<button type="submit" class="btn btn-primary col-sm-2 m-1">Pilih</button>
		<a href="{{ route('siswa.show', Auth::user()->siswa->id) }}" class="btn btn-secondary col-sm-2 m-1">Kembali</a>
		</div>
		</div>
	</form>
@endsection