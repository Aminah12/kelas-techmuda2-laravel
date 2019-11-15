<table class="table" style="border:1px solid #ddd">
	<thead>
		<tr>
			<th> Mahasiswa </th>
			<th> Mata Kuliah </th>
			<th> Dosen </th>
			<th> Kelas </th>
			<th> Ruang </th>
		</tr>
	</thead>
<tbody>
	@foreach($kelas as $p)
	<tr>
		<td> {{$p->npk}} </td>
		<td> {{$p->kode}} </td>
		<td> {{$p->id_dosen}} </td>
		<td> {{$p->kelas}} </td>
		<td> {{$p->ruang}} </td>
	</tr>
@endforeach


</tbody>

</table>