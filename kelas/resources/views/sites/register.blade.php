@extends('layout.frontend')

@section('content')    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            {!! Form::open(['url'=>'/postregister','class'=>'form-wrap'])!!} 
            <h4 class="mb-4">Form Registrasi Mahasiswa</h4>
            <!--{!! Form::text('npk','',['class'=>'form-control','placeholder'=>'npk'])!!}
            {!! Form::text('kode','',['class'=>'form-control','placeholder'=>'kode'])!!}
            {!! Form::text('id_dosen','',['class'=>'form-control','placeholder'=>'dosen'])!!}           
            {!! Form::text('kelas','',['class'=>'form-control','placeholder'=>'npk'])!!}
            {!! Form::text('ruang','',['class'=>'form-control','placeholder'=>'npk'])!!}-->
            {!! Form::text('nama_mahasiswa','',['class'=>'form-control','placeholder'=>'Nama'])!!}
            {!! Form::text('jenis_kelamin','',['class'=>'form-control','placeholder'=>'Perempuan/Laki-Laki'])!!}
            {!! Form::text('tempat_lahir','',['class'=>'form-control','placeholder'=>'Tempat Lahir'])!!}
            {!! Form::date('tanggal_lahir','',[''])!!}
            {!! Form::text('agama','',['class'=>'form-control','placeholder'=>'Agama'])!!}
            {!! Form::textarea('alamat','',['class'=>'form-control','placeholder'=>'Alamat'])!!}
            {!! Form::text('no_hp','',['class'=>'form-control','placeholder'=>'Kontak'])!!}

             {!! Form::text('email','',['class'=>'form-control','placeholder'=>'email'])!!}
            {!! Form::text('password','',['class'=>'form-control','placeholder'=>'password'])!!}     
            <input type="submit" class="btn btn-primary py-3 px-5" value="Kirim" style="text-align: center;">
            {!! Form::close()!!}
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>
@endsection