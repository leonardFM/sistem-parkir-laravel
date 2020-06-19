@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')  

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Blank Page</h1>
    </div>
    @yield('content')

    <div class="section-body">
    </div>
  </section>
</div>
@include('layout.footer')
