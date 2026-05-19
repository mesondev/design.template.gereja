<h2>Laporan Data Jemaat</h2>

<table border="1" width="100%" cellpadding="5">
<tr>
<th>Nama</th>
<th>JK</th>
<th>Alamat</th>
</tr>

@foreach($data as $j)
<tr>
<td>{{ $j->nama }}</td>
<td>{{ $j->jenis_kelamin }}</td>
<td>{{ $j->alamat }}</td>
</tr>
@endforeach
</table>