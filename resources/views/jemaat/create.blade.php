@extends('layouts.app')

@section('content')
<form method="POST" action="/jemaat">
@csrf
<form method="POST" action="/jemaat" enctype="multipart/form-data">
@csrf
<input type="text" name="nama" class="form-control">
<input type="file" name="foto" class="form-control">
<input name="nama" class="form-control mb-2" placeholder="Nama">
<select name="jenis_kelamin" class="form-control mb-2">
<option>Pria</option>
<option>Wanita</option>
</select>
<input name="alamat" class="form-control mb-2" placeholder="Alamat">
<input name="no_hp" class="form-control mb-2" placeholder="No HP">
<input type="date" name="tanggal_lahir" class="form-control mb-2">
<input name="foto" class="form-control mb-2" placeholder="Foto">
<button class="btn btn-success">Simpan</button>
</form>
@endsection