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
								Data Kelas
							</h3>
							<div class="right">
	<a href="/kelas/export" class="btn btn-sm btn-primary"> Export Excel </a>
	<a href="/kelas/exportpdf" class="btn btn-sm btn-primary" > Export PDF </a>
	<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal"> <i class="lnr lnr-plus-circle">Tambah</i></button>
</div>
</div>
<div class="panel-body>">
	<table class="table table-hobver">
		<thead>
		<tr>
			<th>Mahasiswa</th>
			<th>Matakuliah</th>
			<th>Dosen</th>
			<th>Kelas</th>
			<th>Ruang</th>
			@if(auth()->user()->role == 'admin')
			<th>Aksi</th>
			@endif
			@if(auth()->user()->role == 'mahasiswa')
			<th>Upload Tugas</th>
			@endif
		</tr>
	</thead>
	<tbody>
	@foreach($data_kelas as $kelas)
	<tr> 
		@if(auth()->user()->role == 'mahasiswa')
		<td> {{$kelas->npk}}</td>
		<td> {{$kelas->kode}} </td>
		<td> {{$kelas->id_dosen}}</td>
		<td> {{$kelas->kelas}}</td>
		<td> {{$kelas->ruang}}</td>
		@endif
		@if(auth()->user()->role == 'admin')
		<td>
			<a href="/kelas/{{$kelas->id_kelas}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/kelas/{{$kelas->id_kelas}}/delete" class="btn btn-warning btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');"> Delete </a>
		</td>
		@endif
		@if(auth()->user()->role == 'mahasiswa')
		<td><a href="/kelas/upload" class="btn btn-warning btn-sm">upload</a></td>
		@endif
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
		<form action="/kelas/create" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label for="exampleEmail1">NPK</label>
				<input name="npk" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="NPK">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Matakuliah</label>
				<input name="kode" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Kode Matakuliah">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Dosen</label>
				<input type="text" name="id_dosen" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="dosen">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Kelas</label>
				<input name="sks" type="kelas" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Pagi/Malam">
			</div>
			<div class="form-group">
				<label for="exampleEmail1">Ruang</label>
				<input name="ruang" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Ruangan">
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
		
