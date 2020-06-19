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
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @php
            $no=1;
        @endphp
        @foreach ($data as $row)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $row->tiket }}</td>
          <td>{{ date('H:i:s / d-M-Y', strtotime($row->created_at)) }}</td>
          <td style="width: 70px">
            <a href="/parkir/bayar/{{ $row->id }}" class="btn btn-info btn-sm">Check Out</a>
          </td>
        </tr>
        @endforeach
          
          
      </tbody>
    </table>
  </div>
</div>
@endsection
