@extends('user.master')
@section('seo')
<?php $date=Carbon\Carbon::now()->toDateTimeString(); 
$date=Carbon\Carbon::parse($date)->format('d F Y');
$title = str_replace('datechange', $date, $brand->brand_title);
?>
<title>{{$title}}</title>
<meta name="description" content="{{$brand->brand_description}}">
<meta name="keywords" content="{{$brand->brand_keyword}}">

@endsection

@section('pagecss')                   
<style type="text/css">
.contact_us_div {
	border: 1px solid #878787;
	margin-bottom: -10px;
	padding-bottom: 15px;
	padding-top: 13px;
}
.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
     color: #010101;
    border-color: #878787 #878787 #f6fafc;
    background: #f6fafc;
   
    
   
}
nav{
	padding-top: 15px;
    margin-bottom: -10px;
}
.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    background-color: #f6fafc;
    border-color: #9e9e9e #9e9e9e #9e9e9e;
    width: 33.3%;
    color: black;
    font-weight: 500;
}
</style>
@endsection
@section('userdash')
<div class="container"  id="main_container">
	<div class="row" style="margin-top: 5px;">
		<div class="col-lg-3" id="a" style="margin-top:5px;">
			@include('user.chunks.search_bar_left')
		</div>
		<div class="col-lg-6" s id="b" style="margin-top:5px;width: 100%;">
			<h1 class="price_bar">{{$brand->brand_name}} Mobile Phone Prices in Pakistan</h1>
          <div class="row">
          	<div class="col-md-12">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All {{$brand->brand_name}} Mobile </a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Latest </a>
					<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Coming Soon</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					@include('user.Brand.AllBrandMobilediv')
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					@include('user.Brand.AllBrandLatestMobilediv')
				</div>
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					@include('user.Brand.ComingSoonMobilediv')
				</div>
			</div>
			</div>
		</div>
	</div>

		<div class="col-lg-3"  id="c">
			@include('user.chunks.side_bar_search')
		</div>
	</div>
</div>
@endsection
@section('jsfiles')
<script type="text/javascript">
	comparison_data();
	function comparison_data(){
		$.ajax({
			url: "{{url('comparison_data')}}",
			type: "get",
			success: function( data ) {
				$('#tblEntAttributes tbody').append(data);
			}
		});
	}
</script>
@endsection