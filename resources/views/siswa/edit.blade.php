@extends('layouts.app')

@section('content')
	<h1>Edit Data Siswa</h1>
	<form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
		@method('PATCH')
		@csrf
		<div class="card card-body col-sm-8">
			<div class="row col-sm-12 form-group">
			  <label for="nik">NIK:</label>
			  <input type="text" class="form-control" name="nik" value="{{$siswa->nik}}"/>
			</div>
			<div class="row col-sm-12 form-group">
			  <label for="nama">Nama:</label>
			  <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}"/>
			</div>
			<div class="row col-sm-12 form-group">
			  <label for="agama">Agama:</label>
			  <select class="form-control" id="agama" name="agama">
			  	<option value="Islam">Islam</option>
			  	<option value="Kristen">Kristen</option>
			  	<option value="Katolik">Katolik</option>
			  	<option value="Hindu">Hindu</option>
			  	<option value="Budha">Budha</option>
			  	<option value="Konghuchu">Konghuchu</option>
			  	<option value="Atheis">Atheis</option>
			  </select>
			</div>
			<div class="row col-sm-12 form-group">
				<div class="col-sm-4">
				  <label for="tempat_lahir">Tempat Lahir:</label>
				  <input type="text" class="form-control" name="tempat_lahir" value="{{$siswa->tempat_lahir}}"/>
				</div>
				<div class="col-sm-8">
				  <label for="tanggal_lahir">Tanggal Lahir:</label>
				  <input type="date" class="form-control" name="tanggal_lahir" value="{{$siswa->tanggal_lahir}}"/>			
				</div>
			</div>
			<div class="row col-sm-12 form-group">
			  <label for="jeniskelamin">Jenis Kelamin:</label>
			  <select class="form-control" id="jeniskelamin" name="jeniskelamin">
			  	<option value="Laki-laki">Laki-laki</option>
			  	<option value="Perempuan">Perempuan</option>
			  </select>
			</div>
			<div class="row col-sm-12 form-group">
			  <label for="alamat">Alamat:</label>
			  <textarea type="text" class="form-control" name="alamat">{{$siswa->alamat}}</textarea>
			</div>
			<div class="row col-sm-12 form-group">
				<div class="col-sm-3 form-group">
				  <label for="provinsi">Provinsi:</label>
				  <input type="text" class="form-control" name="provinsi" value="{{$siswa->provinsi}}"/>
				</div>
				<div class="col-sm-3 form-group">
				  <label for="kota">Kota:</label>
				  <input type="text" class="form-control" name="kota" value="{{$siswa->kota}}"/>
				</div>
				<div class="col-sm-3 form-group">
				  <label for="kecamatan">Kecamatan:</label>
				  <input type="text" class="form-control" name="kecamatan" value="{{$siswa->kecamatan}}"/>
				</div>
				<div class="col-sm-3 form-group">
				  <label for="kelurahan">Kelurahan:</label>
				  <input type="text" class="form-control" name="kelurahan" value="{{$siswa->kelurahan}}"/>
				</div>	
			</div>
			<div class="row col-sm-12 form-group">
			  <label for="telepon">Telepon:</label>
			  <input type="text" class="form-control" name="telepon" value="{{$siswa->telepon}}"/>
			</div>
			<div class="container row">
			<button type="submit" class="btn btn-primary col-sm-2">Edit</button>
			<a href="{{ route('siswa.show', Auth::user()->siswa->id) }}" class="btn btn-secondary col-sm-2 m-1">Kembali</a>
			</div>
		</div>
		
	</form>
@endsection