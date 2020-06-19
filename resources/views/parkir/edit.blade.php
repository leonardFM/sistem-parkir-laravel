@extends('layout.content')
@section('content')
<div class="card">
  <div class="card-body">
    <form action="/parkir/edit/{{ $parkir->id }}" method="post">
    @method('put')    
    @csrf    
        <div class="form-group">
            <label for="exampleInputEmail1">parkir</label>
            <input type="text" name="parkir" value="{{ $parkir->parkir }}" class="form-control" id="exampleInputEmail1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection@extends('layout.content')
@section('content')
<div class="row">
  <div class="card col-md-4">
    <div class="card-body">
      <form action="/parkir/create" method="post">
      @csrf   
      <div class="form-group">
        
          <div class="section-title mt-0">Input Parkir</div>
          <hr>
          <div class="form-group">
            <label class="d-block">Jenis Kendaraan</label>
            <select class="custom-select" name="kendaraan">
              <option selected>Open this select menu</option>

              @foreach ($kendaraan as $row)
              <option value="{{ $row->id }}">{{ $row->kendaraan }}</option>
              @endforeach
              
            </select>
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">No Polisi</label>
              <input type="hidden" name="tiket" value="ini tiket">
              <input type="text" name="no_polisi" class="form-control form-control-sm" id="exampleInputEmail1">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Warna Kendaraan</label>
            <input type="text" name="warna" class="form-control form-control-sm" id="exampleInputEmail1">
          </div>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>  

<div class="card col-md-8">
  <div class="card-body">
    <div class="section-title mt-0">Parkir Terbaru</div>
    <hr>
    <table  class="table table-bordered table-striped">
      <thead>
          <tr>
              <th>No</th>
              <th>kendaraan</th>
              <th>no polisi</th>
              <th>warna</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($data as $row)
          <tr>
            <td>1</td>
            <td>{{ $row->kendaraan->kendaraan }}</td>
            <td>{{ $row->no_polisi }}</td>
            <td>{{ $row->warna }}</td>
          </tr>
        @endforeach
          
      </tbody>
    </table>

    <a href="/parkir" class="btn btn-success btn-block btn-sm mt-2" style="float: right">Lihat Semua</a>
  </div>
@endsection