<!-- Ini untuk manggil si master -->
@extends('layout.master')

<!-- Untuk deklarasi kontennya -->
@section('content')

<!-- Untuk kondisional section -->
<div class="main">
	<div class="main-content">
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">
								Data Mahasiswa
							</h3>
							<div class="right">
	<a href="/mahasiswa/export" class="btn btn-sm btn-primary"> Export Excel </a>
	
	<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal"> <i class="lnr lnr-plus-circle">Tambah</i></button>
</div>
</div>
<div class="panel-body>">
	<table class="table table-hobver">
		<thead>
		<tr>
			<th> NPK </th>
			<th> Nama Mahasiswa </th>
			<th> Jenis kelamin </th>
			<th> Tempat Lahir </th>
			<th> Tanggal Lahir </th>
			<th> Agama </th>
			<th> Alamat </th>
			<th> No Handpone </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
	@foreach($data_mahasiswa as $mahasiswa)
	<tr> 
		<td> {{$mahasiswa->npk}} </td>
		<td> {{$mahasiswa->nama_mahasiswa}}</td>
		<td> {{$mahasiswa->jenis_kelamin}}</td>
		<td> {{$mahasiswa->tempat_lahir}}</td>
		<td> {{$mahasiswa->tanggal_lahir}}</td>
		<td> {{$mahasiswa->agama}}</td>
		<td> {{$mahasiswa->alamat}}</td>
		<td> {{$mahasiswa->no_hp}}</td>

		<td>
			<a href="/mahasiswa/{{$mahasiswa->npk}}/edit" class= "btn btn-warning btn-sm"> Edit </a>
			<a href="/mahasiswa/{{$mahasiswa->npk}}/delete" class= "btn btn-warning btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');"> Delete </a>

		</td>
	</tr>

	@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"> Tambah Data Kelas </h5>
		
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				&times;
			</span>
		</button>
	</div>
	<div class="modal-body">
		<!-- Pembuatan form -->
		<form action="/mahasiswa/create" method="POST">
			{{csrf_field()}}
			
			<div class="form-group">
				<label for="exampleEmail1">Nama Mahasiswa</label>
				<input type="text" name="nama_mahasiswa" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Nama Mahasiswa">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Jenis Kelamin</label>
				<input name="jenis_kelamin" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Perempuan/Laki-laki">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Tempat Lahir</label>
				<input name="tempat_lahir" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Tempat Lahir">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Tanggal Lahir</label>
				<input name="tanggal_lahir" type="date" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Tanggal Lahir">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Agama</label>
				<input type="text" name="agama" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Agama">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Alamat</label>
				<input type="text" name="alamat" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="alamat">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">No Handpone</label>
				<input type="text" name="no_hp" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="no_hp">
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
				
			</div>

		</form>
	</div>
</div>
</div>
</div>
@section('content1')

<!-- Untuk kondisional section -->

	@endsection

		
</body>
</html>