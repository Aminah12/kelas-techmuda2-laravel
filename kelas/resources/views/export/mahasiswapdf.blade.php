<table class="table" style="border:1px solid #ddd">
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
		</tr>
	</thead>
<tbody>
	@foreach($mahasiswa as $m)
	<tr>
		<td> {{$m->npk}} </td>
		<td> {{$m->nama_mahasiswa}}</td>
		<td> {{$m->jenis_kelamin}}</td>
		<td> {{$m->tempat_lahir}}</td>
		<td> {{$m->tanggal_lahir}}</td>
		<td> {{$m->agama}}</td>
		<td> {{$m->alamat}}</td>
		<td> {{$m->no_hp}}</td>
	</tr>
@endforeach


</tbody>

</table>