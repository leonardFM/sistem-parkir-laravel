@extends('layout.content')
@section('content')

<div class="card">
    <div class="card-body">
      <table id="table-1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>tiket</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
          @php
              $no=1;
          @endphp
          @foreach ($laporan as $row)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->tiket }}</td>
            <td>{{ date('H:i:s / d-M-Y', strtotime($row->waktu_masuk)) }}</td>
            <td>{{ date('H:i:s / d-M-Y', $row->waktu_keluar) }}</td>
            <td>Rp. {{ $row->biaya }}</td>
          </tr>
          @endforeach
            
            
        </tbody>
      </table>
    </div>
  </div>

@endsection