@extends('user.master')
@section('seo')
<title>{{$mob->mobile_title}}</title>
<meta name="description" content="{{$mob->mobile_description}}">
<?php 

$date_text_daily=\Carbon\Carbon::today()->toDateString();
$mobile_keyword = str_replace('date_text_daily', $date_text_daily, $mob->mobile_keyword);

?>
<meta name="keywords" content="{{$mobile_keyword}}">
@endsection
@section('pagecss')
<link href="{{ URL::to('user/css/single_mobile.css') }}" rel="stylesheet">
@include('user.singlemobile.schemaorg')
@endsection
<?php $Selife_camera="";
$back_camera=""; 
?>
<?php $myArray=array("1"=>"Single Camera","2"=>"Dual Camera","3"=>"Triple Camera","4"=>"Quad Camera"); ?>  

@foreach($myArray as $opt_value=>$opt_name)
<?php if($mob->camere_count_front==$opt_value){ 
	$Selife_camera=$opt_name;
} ?>
@endforeach
@foreach($myArray as $opt_value=>$opt_name)
<?php if($mob->camere_count_back==$opt_value){ 

	$back_camera=$opt_name;
} ?>
@endforeach
@section('userdash')

<div class="container" id="main_container">
	<div class="row"  style="margin-top: 5px;">
		<div class="col-lg-2" id="a" style="margin-top:5px;">
		 
		
		
		
		</div>
		<div class="col-lg-7"  id="b" style="margin-top:2px;">
			<div class="mb">
			<h1 class="mb_name" >{{$mob->brands->brand_name}} {{$mob->mobile_name}}</h1>
			<span class="mb_price">RS:&nbsp;{{number_format($mob->pkr_price)}}</span>

			</div>
			<hr>

			<div class="row" style="margin-top: 5px;">
				<div class="divLeft">
					<?php
                    $image_path='mobile_pics/'.$mob->pic_folder.'/'.$mob->big_pic;
				 if(file_exists($image_path)){
                   
				 }else{
				 	 $image_path='user/mobile_pic_not_found.png';
				 }

				  ?>
					<img id="mobile_img" src="{{ URL::asset($image_path) }}"  alt="{{$mob->brands->brand_name}} {{$mob->mobile_name}} price in Paksitan" title="{{$mob->brands->brand_name}} {{$mob->mobile_name}} mobile price in Paksitan">
					
					<div class="mb_links">
						<a class="links_mobiles_div" href="{{url('mobile_pictures/'.$mob->mobile_url)}}">
							<i class="fa  fa-picture-o fa-lg"></i>&nbsp;Pictures
						</a><hr>
						<a class="links_mobiles_div" href="#comments_id">
							<i class="fa  fa-comments-o  fa-lg"></i>&nbsp; Comments & Reviews
						</a>
					</div>
				</div>

				<div class="divRight">
					@include('user.singlemobile.largescreentable')

					@include('user.singlemobile.smallscreentable')
				</div>
			</div>
			<div class="col-md-12">
				<div class="facebook_frame">
						<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmobileinpakistan%2F&width=400&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId" width="100%" height="45" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
			</div>
			<hr>
			
			<div class="row" id="mobile-specs-div"> 
				@include('user.singlemobile.specstable')
			</div>
			
			@include('user.singlemobile.review')
		</div>
		<div class="col-lg-3"  id="c">
			@include('user.chunks.side_bar_search')
			<table class="table" border="1" bordercolor="grey" align="center" id="similar_mobiles">
				<tbody>

					<tr class="search_bar_right">
						<th colspan="20" class="searchbar_head">Similar Mobiles&nbsp;<i class="fa fa-table fa-lg" aria-hidden="true"></i></th> 
					</tr>

				</tbody>
			</table>
		</div>

	</div>
	<!-- /.col-lg-9 -->
	<!-- /.row -->
	<div class="bottom_nav">
		<ul class="list-inline">
			<li class="list-inline-item">
				<a style="color: white;" href="#">Rs. {{number_format($mob->pkr_price)}}</a>
			</li>
			<li class="list-inline-item">
				<a  class="links_mobiles_div" style="color: white;" href="{{url('mobile_pictures/'.$mob->mobile_url)}}"><i class="fa fa-picture-o fa-lg"></i>&nbsp;Pictures</a>
			</li>
			<li class="list-inline-item">
				<a style="color: white;" href="#">Compare</a>
			</li>
		</ul>
	</div>	
</div>
@endsection

@section('jsfiles')
<script type="text/javascript">
	$(document).ready(function() {
		comparison_data();
		function comparison_data(){
			$.ajax({
				url: "{{url('Similar_Mobile')}}/"+$('#mobile_id').val(),
				type: "get",
				success: function( data ) {



					$('#similar_mobiles tbody').append(data);

				}
			});
		}
	});
</script>
@endsection