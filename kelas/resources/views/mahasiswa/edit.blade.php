@extends('layout.master')
@section('content')

<div class="main">
	<div class="main-content">
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							Edit Data
						</div>
					<div class="panel-body">
						<form action="/mahasiswa/{{$mahasiswa->npk}}/update" method="POST">
							{{csrf_field()}}
							<div>
								<label for="exampleEmail1">Nama Dosen</label>
								<input name="nama_dosen" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Nama Dosen" value="{{$mahasiswa->nama_mahasiswa}}">
							</div>
							<div class="form-group">
								<label for="exampleEmail1">Jenis Kelamin</label>
								<input name="jenis_kelamin" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Perempuan/Laki-Laki" value="{{$mahasiswa->jenis_kelamin}}">
							</div>
							<div class="form-group">
								<label for="exampleEmail1">Tempat Lahir</label>
								<input name="tempat_lahir" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Tempat Lahir" value="{{$mahasiswa->tempat_lahir}}">
							</div>
							<div class="form-group">
								<label for="exampleEmail1">Tanggal Lahir</label>
								<input name="tanggal_lahir" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Dosen" value="{{$mahasiswa->tanggal_lahir}}">
							</div>
							<div class="form-group">
								<label for="exampleEmail1">Agama</label>
								<input name="agama" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Agama" value="{{$mahasiswa->agama}}">
							</div>
							<div class="form-group">
								<label for="exampleEmail1">Alamat</label>
								<input name="alamat" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Alamat" value="{{$mahasiswa->alamat}}">
							</div>
							<div class="form-group">
								<label for="exampleEmail1">No Handpone</label>
								<input name="no_hp" type="text" class="form_control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="No HP" value="{{$mahasiswa->no_hp}}">
							</div>
								<button type="submit" class="btn btn-primary">
								Update
								</button>	
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
