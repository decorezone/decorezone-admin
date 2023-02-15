@extends('user.master')
@section('seo')
<title> Mobile Price in Pakistan | Mobile Phone price |  latest Mobile  </title>
<meta name="description" content="Check the latest Mobile Price in Pakistan 2019 on a daily basis, Daily Updated Mobile Price, features, People reviews, New Mobile Phone news, comparison.
">
<meta name="keywords" content="Mobile Prices, Lg Mobile Prices , mobile phone Prices, mobileinpakistan, pakistan, mobile phone, Mobile Phone Pakistan, phone, nokia, samsung, sony ericsson, prices, motorola, HTC,oppo.realme,vivo,iphone,apple
"/>
<style type="text/css">
div.owl-nav {
	position: absolute !important;
	top: -31px !important;
	right: 20px !important;
	font-weight: 800 !important;
	font-size: smaller !important;
	padding: 4px !important;
	background: darkcyan;
	color: white;
	border-radius: 25px;
}
.owl-carousel .owl-nav button.owl-prev{
	margin-right: 10px !important;
}

</style>
@endsection

@section('userdash')
<div class="container"  id="main_container">
	<div class="row" class="main_row">
		<div class="col-lg-3" id="a">
			@include('user.chunks.search_bar_left')
		</div>
		<div class="col-lg-6"  id="b">
			<div id="carouselExampleIndicators" class="carousel slide my-4 slider_div" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					@foreach($slider as $s)
					<div class="carousel-item <?php if($loop->first){ echo("active"); } ?>">
						<img class="d-block img-fluid" src="{{ URL::asset('Slider/'.$s->slider_folder.'/'.$s->slider_image) }}" alt="First slide">
					</div>
					@endforeach
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<h1 class="price_bar heading_top">Latest Mobile Phone Prices in Pakistan</h1>
			@include('user.chunks.welcome_mobile_div')
           
			
		</div>
		<div class="col-lg-3"  id="c">
			@include('user.chunks.side_bar_search')
			<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmobileinpakistan%2F&width=400&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width="100%" height="30%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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

	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:2,
		responsiveClass:true,
		autoPlay: 1000,
		pagination: true,
		dotData: true,
		dotsData: true,
		responsive:{
			0:{
				items:3,
				nav:true
			},
			600:{
				items:4,
				nav:false
			},
			1000:{
				items:4,
				nav:true,
				loop:false
			}
		}
	})
	$( ".owl-prev").html('< prev');
	$( ".owl-next").html('|&nbsp; next >');
</script>

@endsection