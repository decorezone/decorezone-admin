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
						<h2 style="border-bottom: 1px solid;">Disclaimer</h2>

						<p>All the information on this website is published in good faith and for general information purpose only. <a href="https://mobileinpakistan.com/">https://mobileinpakistan.com/</a> does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (<a href="https://mobileinpakistan.com/">https://mobileinpakistan.com/</a>), is strictly at your own risk. will not be liable for any losses and/or damages in connection with the use of our website.
							<br>

							From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone <strong>bad</strong>.
						</p>


						

						
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
