@extends('layouts.app')

@section('content')
<a href="/jemaat/create" class="btn btn-primary mb-3">Tambah Jemaat</a>

<table class="table table-bordered">
<tr>
<th>Nama</th>
<th>JK</th>
<th>Alamat</th>
<th>Foto</th>
<th></th>Aksi</th>
</tr>

@foreach($data as $row)
<tr>
<td>{{ $row->nama }}</td>
<td>{{ $row->jenis_kelamin }}</td>
<td>{{ $row->alamat }}</td>
<td>
@if($row->foto)
<img src="{{ asset('storage/'.$row->foto) }}" width="60">
@endif
</td>
<td>
 <a href="/jemaat/{{ $row->id }}/edit" class="btn btn-warning">Edit</a>
 <form action="/jemaat/{{ $row->id }}" method="POST" style="display:inline">
  @csrf @method('DELETE')
  <button class="btn btn-danger">Hapus</button>
 </form>
</td>

</tr>
@endforeach
</table>
@endsection