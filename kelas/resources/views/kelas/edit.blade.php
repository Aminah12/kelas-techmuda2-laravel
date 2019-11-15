@extends('layout.master')
@section('content')

<div class="main">
	<div class="main-content">
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
		<form action="/kelas/{{$kelas->id_kelas}}/update" method="POST">
				{{csrf_field()}}
			<div>
					<label for="exampleEmail1">NPK</label>
					<input name="npk" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Nama Pegawai" value="{{$kelas->npk}}">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">kode Matakuliah</label>
					<input name="kode" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Kode Matkul" value="{{$kelas->kode}}">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Dosen</label>
					<input name="id_dosen" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Dosen" value="{{$kelas->id_dosen}}">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Kelas</label>
					<input name="kelas" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Pagi/Malam" value="{{$kelas->kelas}}">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Ruang</label>
					<input name="ruang" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Ruangan" value="{{$kelas->ruang}}">
				</div>
				
					<button type="submit" class="btn btn-primary">
					Update
					</button>	
				</div>
			</form>
			
	</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection