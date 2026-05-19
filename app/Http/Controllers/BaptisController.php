<?php

namespace App\Http\Controllers;

use App\Models\Baptis;
use App\Models\Jemaat;
use Illuminate\Http\Request;

class BaptisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jemaat = Jemaat::all();
        return view('baptis.create', compact('jemaat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Baptis::create($request->all());
        return redirect('/baptis')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Baptis $baptis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Baptis $baptis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Baptis $baptis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Baptis $baptis)
    {
        //
    }
}
