@extends('layout.master')
@section('content')

<div class="main">
	<div class="main-content">
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<form action="/kelas/upload/proses" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<b>File Gambar</b><br/>
									<input type="file" name="file">
								</div>
			 
								<div class="form-group">
									<b>Keterangan</b>
									<textarea class="form-control" name="keterangan"></textarea>
								</div>
			 
								<input type="submit" value="Upload" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection