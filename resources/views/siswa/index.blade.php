@extends('layouts.app')

@section('content')
		<h1>Data Pendaftar</h1>
		<br><br>
		@if(count($siswas) > 0)
		<br>
		<table class="table table-striped">
			<tr>
				<th>Name</th>
				<th>Sekolah Asal</th>
				<th>Sekolah Pilihan 1</th>
				<th>Sekolah Pilihan 2</th>
				<th>Sekolah Pilihan 3</th>
				<th>Action</th>
			</tr>
			@foreach($siswas as $siswa)
				<tr>
					<td>{{$siswa->nama}}</td>
					<td>{{$siswa->sekolah_asal}}</td>
					<td>{{$siswa->sekolah1}}</td>
					<td>{{$siswa->sekolah2}}</td>
					<td>{{$siswa->sekolah3}}</td>
					<td>
					<form action="{{ route('siswa.destroy', $siswa->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<button class="btn btn-outline-danger" type="submit">Delete</button>
					</form>	
					</td>
				</tr>
			@endforeach
		</table>
		@else
		<br>
			<h3>Data Kosong</h3>
		@endif
@endsection