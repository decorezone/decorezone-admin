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
			<!-- <img src="{{ URL::asset('user/150x600.jpg') }}" style="float:right;" alt="" class="hide_me_on_mobile"> -->

		</div>
		<div class="col-lg-6" s id="b" style="margin-top:5px;width: 100%;">
			<div id="about" class="container-fluid">
				<?php
				 $image_path='page/default/default.jpg';
				 if($page->folder_name){
                 $image_path='page/'.$page->folder_name.'/'.$page->featured_image_1;
				 }
				 ?>
				<div class="row">
					<div class="col-md-12">
						<img class="d-block img-fluid" src="{{ URL::asset($image_path) }}" alt="First slide">
					</div>
					<div class="col-md-12">
						{!! $page->page_content !!}
					</div>

				</div>
				@if( $page->contact_us_form_check)
				@include('pages.contact_us')
				@endif
			</div>
		</div>
		<div class="col-lg-3"  id="c">
			@include('user.chunks.side_bar_search')
		</div>
	</div>
</div>
@endsection
