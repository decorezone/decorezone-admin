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
			@include('user.chunks.search_bar_left')
		</div>
		<div class="col-lg-6" s id="b" style="margin-top:5px;width: 100%;">
			<h1 class="price_bar">{{$memory}}{{$memory_unit}} Memory Mobile Phone Prices
			</h1>
			@include('user.chunks.allmobilediv')
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
