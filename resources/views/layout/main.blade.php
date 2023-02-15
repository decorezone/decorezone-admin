@include('layout.partials.header')

@include('layout.partials.adminlinks')
<div class="main">
  <div class="main-inner">
    <div class="container">
@yield('content')
      </div>
      </div>
  </div>

@include('layout.partials.footer')

@yield('js')
