@extends('layout.content')
@section('content')
<div class="card col-md-6">
  <div class="card-body">
    <h1 class="text-center">Sokin Parkir</h1>
    <hr>
    <h3 class="text-center">no karcis : {{ $data->tiket }}</h3>
    <br>
    @php
        $awal = strtotime($data->created_at);
        $akhir = $date;
        $diff = $akhir - $awal;
        $jam = floor($diff / (60 * 60));
        $menit = $diff - $jam * (60 * 60);
        $biaya = date($jam * 2000 + 5000);

    @endphp
    <p>Jam masuk : {{ date('H:i:s / d-M-Y', strtotime($data->created_at)) }}</p>
    <p>Jam keluar : {{ date('H:i:s / d-M-Y', $date) }}</p>
    <p>biaya perjam : 5000 (perjam berikutnya Rp.2000)</p>
    <p>lama parkir : {{ date($jam) }} jam {{ floor($menit / 60) }} menit</p>
    -------------------------------------------------------------- +
    <h3>Total : Rp. {{ $biaya }}</h3>
    <br>
    <hr>
    <p class="text-center">bila karcis hilang akan dikenakan denda sebesar <b>Rp.100.000.</b></p>
  </div>

  <form action="/parkir/laporan/{{ $data->id }}" method="post">
    @csrf
    <input type="hidden" name="tiket" value="{{ $data->tiket }}">
    <input type="hidden" name="waktu_masuk" value="{{ $awal }}">
    <input type="hidden" name="waktu_keluar" value="{{ $akhir }}">
    <input type="hidden" name="biaya" value="{{ $biaya }}">

    <button type="submit" class="btn btn-primary"> input </button>
  </form>
</div>
@endsection
