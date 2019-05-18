@extends('layouts.app')

@section('content')
		<div class="row">
		<div class="col-sm-3"></div>
		<div class="card col-sm-10">
			<div class="card-body">
				<h1>Data Siswa</h1>
				<a href="/siswa/pdf/{{$siswa->id}}">Export PDF</a>

                <div class="row">
                	<div class="col-sm-7">
		                <table class="table table-inverse">
						<tr>
							<td class="col-sm-4">NISN</td> 
							<td class="col-sm-8">: {{$siswa->nisn}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">NIK</td> 
							<td class="col-sm-8">: {{$siswa->nik}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Nama</td> 
							<td class="col-sm-8">: {{$siswa->nama}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Alamat</td> 
							<td class="col-sm-8">: {{$siswa->alamat}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Provinsi</td> 
							<td class="col-sm-8">: {{$siswa->provinsi}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Kota</td> 
							<td class="col-sm-8">: {{$siswa->kota}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Kecamatan</td> 
							<td class="col-sm-8">: {{$siswa->kecamatan}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Kelurahan</td> 
							<td class="col-sm-8">: {{$siswa->kelurahan}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Agama</td> 
							<td class="col-sm-8">: {{$siswa->agama}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Kelamin</td> 
							<td class="col-sm-8">: {{$siswa->jeniskelamin}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Tempat, Tanggal Lahir</td> 
							<td class="col-sm-8">: {{$siswa->tempat_lahir}}, {{$siswa->tanggal_lahir}}</td>
						</tr>
						<tr>
							<td class="col-sm-4">Telepon</td> 
							<td class="col-sm-8">: {{$siswa->telepon}}</td>
						</tr>
						</table>		
                	</div>
                	<div class="col-sm-5">
						<h6 class="card-text">Pilih Sekolah Tujuanmu</h6>
						@if($siswa->status != 9)
		                <a href="/siswa/showsch/{{Auth::user()->siswa->id}}" class="btn btn-outline-primary">Edit</a>
		                @endif         
                		<table class="table table-inverse">
			                @if($siswa->sekolah1)
							<tr>
								<td class="col-sm-4">Sekolah Pilihan 1</td> 
								<td class="col-sm-8">: {{$siswa->sekolah1}}</td>
							</tr>
							@endif
							@if($siswa->sekolah2)
							<tr>
								<td class="col-sm-4">Sekolah Pilihan 2</td> 
								<td class="col-sm-8">: {{$siswa->sekolah2}}</td>
							</tr>
							@endif	
							@if($siswa->sekolah3)
							<tr>
								<td class="col-sm-4">Sekolah Pilihan 3</td> 
								<td class="col-sm-8">: {{$siswa->sekolah3}}</td>
							</tr>
							@endif						
                		</table>
                	</div>
                </div>
				
					
				
				@if($siswa->status != 9)
				<a class="btn btn-outline-dark" href="{{route ('siswa.edit',$siswa->id)}}">Edit</a>
				@endif
				@if($siswa->status == 7)
				<a href="/siswa/permanen/{{$siswa->id}}" class="btn btn-outline-danger">Permanenkan Data</a>
				@endif
				
				
				
			</div>
		</div>
		</div>
		</div>
		<div class="col-sm-3"></div>
		
@endsection