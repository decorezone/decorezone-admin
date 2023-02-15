@extends('user.master')
@section('seo')
@if($linkseo)
<title>{{$linkseo->link_title}}</title>
<meta name="description" content="{{$linkseo->link_description}}">
<meta name="keywords" content="{{$linkseo->link_keyword}}">
@endif
@endsection
@section('userdash')
<div class="container"  id="main_container">
	<div class="row" style="margin-top: 5px;">
		<div class="col-lg-3" id="a" style="margin-top:5px;">
			<img src="{{ URL::asset('user/150x600.jpg') }}" style="float:right;" alt="" class="hide_me_on_mobile">

		</div>
		<div class="col-lg-6" s id="b" style="margin-top:5px;width: 100%;">
			<div id="about" class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1 style="border-bottom: 1px solid;">About Us: Mobile in Pakistan</h1>
                       
						<p>Pakistan Smartest portal for giving the daily updates of mobile phones prices, you can find detail description of every mobile, compare to other devices and smart phones and find your dream phone.
							You can also search mobile phone according to your budget , also you can find mobile phone according to you need like RAM, Memory and Camera, keep visiting our site</p>


						<p><strong>Mission:</strong>Our Mission is to become the Pakistan largest mobile portal website to give the right information at right time, for the growing mobile industry. Users can easily choose from thousand of mobiles and find their dream mobile, through blogs and social media we engage more users to experience our website. </p>

						<p><strong>Our Vision:</strong> To become Pakistan Largest and Smartest Mobile Portal Website, where You can find every small information about mobile phones in Pakistan on daily basis   </p>

						
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
