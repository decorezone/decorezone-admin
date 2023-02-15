@extends('adminpannel.master')
@section('customcss')
<style type="text/css">


.des_col{
	color: #3c8dbc;
}
.table b{
	float: right !important;
}
.order_ul li{
	border-bottom: 1px solid #cec9c9;
	margin-top: 5px;
}

.table {
	border-collapse: collapse;
}

.table, th, td {
	border: 1px solid black;
}
th{
	border:1px solid black;
}
.box-title{
	text-align: center !important;
}
label {
	font-weight: 400;
	color: brown;
	padding: 5px;
}
.box {
	background: #eaeaea !important;
}
.subm{
  font-size: 18px;
  font-weight: 900;
}
label{
	font-weight: 900;
    color: darkcyan;
    padding: 5px;
    font-size: initial;
}
.bdx{
	border: 1px solid gray;
    padding: 20px;
    margin: 10px;
}
</style>
@endsection

@include('adminpannel.Seolinks.seolinkscss')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('editPicturelinksUpdate')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="affiliate_link_id" value="{{$affiliate_link->id}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Update Pictures To Database</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<label>Link URL</label>
								<input type="text" required=""  name="product_title" class="form-control" placeholder="post name" value="{{$affiliate_link->featured_link_url}}" disabled="">
							</div>
							
						</div>
						<div class="row bdx">
							<div class="col-md-6">
								<label>Featured Post Images</label>
								<input type="file" name="featured_link_image" class="form-control">
							</div>
							<div class="col-md-6">
								<img src="{{ URL::asset('linksFolder/'.$affiliate_link->featured_link_folder.'/'.$affiliate_link->featured_link_image) }}" alt="{{$affiliate_link->featured_link_url}}" width="270" height="200">
							</div>
						</div>
						
						</div>



						<div class="row">
							<div class="col-md-12">
								<button type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary btn-block subm">Update Affiliate Link Picture</button>
							</div>




						</div>



					</div>

					<!-- /.box-body -->
				</div>
			</div>
			@if (count($errors) > 0 || session('status_ok'))
			<div class="row">
				<div class="col-md-12">
					<div class="box box-default">

						<div class="box-body">
							@if (count($errors) > 0)

							@foreach ($errors->all() as $error)
							{{ $error }}<br>
							@endforeach

							@endif
							@if (session('status_ok'))

							{{ session('status_ok') }}

							@endif
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
			@endif
		</div>
	</form>

</section>
@endsection
