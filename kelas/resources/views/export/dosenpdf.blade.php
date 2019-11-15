<table class="table" style="border:1px solid #ddd">
	<thead>
		<tr> 
		<th>id Dosen </th>
		<th> Nama Dosen </th>
		<th> Jenis Kelamin </th>
		<th> Tempat Lahir </th>
		<th> Tanggal lahir </th>
		<th> Agama </th>
		<th> Alamat </th>
		<th> No handpone </th>
		</tr>
	</thead>
<tbody>
	@foreach($dosen as $p)
	<tr>
		<td> {{$p->id_dosen}} </td>
		<td> {{$p->nama_dosen}} </td>
		<td> {{$p->jenis_kelamin}}</td>
		<td> {{$p->tempat_lahir}}</td>
		<td> {{$p->tanggal_lahir}}</td>
		<td> {{$p->agama}}</td>
		<td> {{$p->alamat}}</td>
		<td> {{$p->no_hp}}</td>
	</tr>
@endforeach

 
</tbody>

</table>