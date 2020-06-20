@extends('layout.content')
@section('content')
  <div id="app">
    <section class="section">
      <div class="container text-center mt-5">
        <div class="row justify-content-center">
          <div class="card card-dark col-md-4" text-centered>
            <div class="card-body">
              <h1 class="text-center">Sokin Parkir</h1>
              <hr>
              <p class="text-center">No karcis :</p>
              <h2 class="text-center">{{ $karcis->tiket }}</h2>
              <br>
              <br>
              <p class="text-center">Tanggal</p>
              <h3 class="text-center">{{ date('d-M-Y', strtotime($karcis->created_at)) }}</h3>
              <hr>
              <p>bila karcis hilang akan dikenakan sanksi selama <b>1 Tahun penjara **</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection  