@extends('user.master')
@section('seo')
@endsection
@section('pagecss')         
<style type="text/css">

.container_item_accessories {
	display: grid;
	grid-template-columns: repeat(auto-fit, 35px);
	justify-content: center;
	grid-gap: 15px;
}
.mobi-card {
	padding: 0px;


}
.mobi-card img{
	width: inherit;
	height: 170px;
}
.pd-o{
	padding: 0px;
}
.mg-top-5, #b{
	margin-top:15px;
}
.btn_width{
	width: 77px;
}
.btn_item_view{
	font-size: smaller; */
    height: 20px;
    border-radius: inherit;
    background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgb(253, 253, 251) 0%, rgb(252, 250, 253) 20%, rgb(244, 247, 252) 25%, rgb(243, 246, 251) 40%, rgb(238, 239, 244) 45%, rgb(237, 234, 243) 50%, rgb(236, 235, 243) 55%, rgb(227, 230, 235) 60%, rgb(230, 230, 242) 65%, rgb(219, 226, 236) 70%, rgb(219, 222, 237) 75%, rgb(221, 221, 229) 85%, rgb(220, 221, 239) 90%, rgb(220, 218, 229) 95%, rgb(220, 219, 227) 100%) repeat scroll 0 0;
    
    border: 1px solid #a69b9b;
    height: 25px;
    line-height: 30px;
    font: bold 11px Arial, Helvetica;
    text-decoration: none;
    color: #0c2d5f;
    text-shadow: 0 1px 0 rgba(255,255,255,.8);
    border-radius: .2em;
    box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
}
@media  only screen and (max-width : 768px) {
	.container_item_accessories {
		display: grid;
		grid-template-columns: repeat(auto-fit, 26px);
		justify-content: center;
		grid-gap: 16px;
	}
	.btn_width{
	width: 60px;
}
}
.btn_width_inherit{
width: inherit;
}
</style>          
@endsection
@section('userdash')

<div class="container"  id="main_container">
	<div class="row" style="margin-top: 5px;">
		
		<div class="col-md-3" id="a" style="margin-top:5px;">

		</div>
		<div class="col-md-6 mg-top-5" id="b">

			<h1 class="price_bar"> GB Mobile Phone Prices
			</h1>
			@include('accessories.partials.item_list')
		</div>
		<div class="col-md-3"  id="c">
			@include('user.chunks.side_bar_search')
		</div>
	</div>
</div>

@endsection
@section('jsfiles')
@endsection