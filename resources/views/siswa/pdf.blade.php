<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa</title>
	<style type="text/css">
		body , p{
			font-family: sans-serif;
			margin-right: 1em;
			margin-left: 1em;
		}
		table {
			/*border-radius: 10px;*/
			font-style: sans-serif;
			border: none;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			text-align: left;
			padding: 8px;
		}
	</style>
</head>
	<body>
		<center><h1>Formulir Pendaftaran Siswa</h1></center>
			<h3>Data Siswa</h3>
			<table>
			<tr>
				<td>NIK</td> 
				<td>: {{$siswa->nik}}</td>
			</tr>
			<tr>
				<td>NISN</td> 
				<td>: {{$siswa->nisn}}</td>
			</tr>
			<tr>
				<td>Nama</td> 
				<td>: {{$siswa->nama}}</td>
			</tr>
			<tr>
				<td>Agama</td> 
				<td>: {{$siswa->agama}}</td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td> 
				<td>: {{$siswa->tempat_lahir}}, {{$siswa->tanggal_lahir}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td> 
				<td>: {{$siswa->jeniskelamin}}</td>
			</tr>
			<tr>
				<td>Alamat</td> 
				<td>: {{$siswa->alamat}}</td>
			</tr>
			<tr>
				<td></td> 
				<td>: {{$siswa->kelurahan}}, {{$siswa->kecamatan}}, {{$siswa->kota}}, {{$siswa->provinsi}}</td>
			</tr>		
			</table>

			<br><br>
			<h3>Data Sekolah</h3>
			<table>
			<tr>
				<td>Sekolah Asal</td> 
				<td>: {{$siswa->sekolah_asal}}</td>
			</tr>
			<tr>
				<td>Sekolah Pilihan 1</td> 
				<td>: {{$siswa->sekolah1}}</td>
			</tr>
			<tr>
				<td>Sekolah Pilihan 2</td> 
				<td>: {{$siswa->sekolah2}}</td>
			</tr>
			<tr>
				<td>Sekolah Pilihan 3</td> 
				<td>: {{$siswa->sekolah3}}</td>
			</tr>
			</table>

			<br><br>
			<p style="float: right;">Tanda Tangan</p>
			<br><br><br><br>
			<p style="float: right;">Panitia PPDB Bojonegoro</p>
	</body>
</html>
		