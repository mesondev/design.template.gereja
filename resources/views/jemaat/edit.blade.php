@extends('layouts.app')

@section('content')
<form method="POST" action="/jemaat/{{ $jemaat->id }}">
@csrf @method('PUT')
<input name="nama" value="{{ $jemaat->nama }}" class="form-control mb-2">
<button class="btn btn-primary">Update</button>
</form>
@endsection