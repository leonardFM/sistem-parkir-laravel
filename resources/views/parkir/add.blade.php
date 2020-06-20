@extends('layout.content')
@section('content')
  <div id="app">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 ">
            <div class="login-brand">
              <img src="/assets/img/parkir.jpg"  width="200" >
            </div>

            <div class="card card-dark">

              <div class="card-body">
                <marquee style="font-size: 20px;"><b>Tekan tombol untuk mencetak karcis</b></marquee>
                <hr>
                <form action="/parkir/create" class="text-center" method="post">
                  @csrf    
                  @php
                      $random = rand(1,999);
                  @endphp
                      <input type="hidden" name="tiket" value="SPO-{{ $random }}">
                      <button type="submit" class="btn btn-primary" style="margin-top: 100px;">Tombol Karcis</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection