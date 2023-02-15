<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ URL::asset('user/faviicon.png') }}">

  @yield('seo')
  <?php 
   $asset_version='25';
  ?>
  
  <link href="{{ URL::to('user/vendor/bootstrap/css/bootstrap.css?v='.$asset_version) }}" rel="stylesheet">
  <link href="{{ URL::to('user/css/shop-homepage.css?v='.$asset_version) }}" rel="stylesheet">
  <link href="{{ URL::to('user/css/style.css?v='.$asset_version) }}" rel="stylesheet">
  <link href="{{ URL::to('user/css/mobiles.css?v='.$asset_version) }}" rel="stylesheet">
  <link href="{{ URL::to('user/css/select2.min.css?v='.$asset_version) }}" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="token" content="{!! csrf_token() !!}">

  @yield('pagecss')
</head>
<body>
  <nav class="nav-mobile">
    <div class="container">
      <div class="row mobile-header">
        <div class="col-md-12 nav-mob-row text-center" style="padding-top:5px;">
          <a class="site-title" href="/">MobileinPakistan.com&nbsp;&nbsp;</a>
        </div>
        <div class="col-12 text-center nav-mob-row" style="padding-top:5px;">
          <div class="navbar-collapse">
            <select class="mobile_search form-control" style="width:100%;"></select>
          </div>
        </div>
      </div>  

      <div id="filters">
        <button type="button" class="btn btn-primary" id="search-btn-mob" data-toggle="modal" data-target="#myModal">
          <i class="fa fa-search"></i> Search
        </button>
      </div>



    </div>
  </nav>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg nav-desktop" >
    <div class="container" id="navbar-container">
      <div class="row">

        <div class="col-4">
          <div class="col-md-12" style="padding-top:5px;">
            <a class="site-title" href="/">MobileinPakistan.com&nbsp;&nbsp;</a>
          </div>
        </div>

        <div id="search_box" class="col-4 p-0 bg-light rounded rounded-pill">
          <div class="input-group">
           <select class="mobile_search form-control" style="width:100%;"></select>
         </div>
       </div>

       <div class="col-4" style="padding-top:14px;">
        <!-- <a href="/" class="btn btn-success btn_header">Advance Search</a>
        <a href="/" class="btn btn-success btn_header">Featured/Top/Mobile</a>
        <a href="/" class="btn btn-success btn_header">Editor Choice</a> -->


      </div>  

    </div>

  </div>
</nav>