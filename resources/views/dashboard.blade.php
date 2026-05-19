@extends('layouts.app')
@section('content')

<h1 class="h3 mb-4">Dashboard Gereja</h1>

<div class="row">

  <div class="col-md-3">
    <div class="card border-left-primary shadow">
      <div class="card-body">
        Total Jemaat
        <h2 id="totalJemaat">0</h2>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card border-left-success shadow">
      <div class="card-body">
        Total Keluarga
        <h2 id="totalKeluarga">0</h2>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card border-left-info shadow">
      <div class="card-body">
        Baptis
        <h2 id="totalBaptis">0</h2>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card border-left-warning shadow">
      <div class="card-body">
        Pernikahan
        <h2 id="totalNikah">0</h2>
      </div>
    </div>
  </div>

</div>

<hr>

<canvas id="chartGender"></canvas>

@endsection