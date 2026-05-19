<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
public function index()
{
    $data = Keluarga::all();
    return view('keluarga.index',compact('data'));
}

public function store(Request $request)
{
    Keluarga::create($request->all());
    return redirect('/keluarga');
}

public function update(Request $request, Keluarga $keluarga)
{
    $keluarga->update($request->all());
    return redirect('/keluarga');
}

public function destroy(Keluarga $keluarga)
{
    $keluarga->delete();
    return back();
}
}