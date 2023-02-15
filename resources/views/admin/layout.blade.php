<!doctype html>
<html lang="en">
  <head>
    @include('admin.chunks.header')
</head>
  <body class="antialiased theme-dark">
    <div class="page">
       @include('admin.chunks.nav')
       <div class="content">

        <div class="container-xl">
        @yield('page_content')
        	
        </div>
       </div>
        @include('admin.chunks.footer_links')
     </div>
     @include('admin.chunks.scripts')
 </body>
  @yield('javabee')
</html>