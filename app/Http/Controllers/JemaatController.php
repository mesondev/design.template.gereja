<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $data = Jemaat::when($keyword, function($query,$keyword){
            return $query->where('nama','like',"%$keyword%");
        })->latest()->paginate(5);

        return view('jemaat.index',compact('data'));
    }

    public function create()
    {
        return view('jemaat.create');
    }

    public function store(Request $request)
        {
            $data = $request->all();

            if($request->hasFile('foto')){
                $file = $request->file('foto')->store('foto_jemaat','public');
                $data['foto'] = $file;
            }

            Jemaat::create($data);
            return redirect('/jemaat');
        }
    

    public function edit(Jemaat $jemaat)
    {
        return view('jemaat.edit', compact('jemaat'));
    }

    public function update(Request $request, Jemaat $jemaat)
    {
        $data = $request->all();

        if($request->hasFile('foto')){
            $file = $request->file('foto')->store('foto_jemaat','public');
            $data['foto'] = $file;
        }

        $jemaat->update($data);
        return redirect('/jemaat');
    }

    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
        return redirect('/jemaat')->with('success','Data dihapus');
    }

    public function exportPdf()
    {
        $data = Jemaat::all();
        $pdf = Pdf::loadView('jemaat.pdf', compact('data'));
        return $pdf->download('jemaat.pdf');

    }

    
}