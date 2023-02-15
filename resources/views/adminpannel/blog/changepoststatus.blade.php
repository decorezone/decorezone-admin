@extends('adminpannel.master')
@section('customcss')
<link rel="stylesheet" href="{{ URL::to('adminfiles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
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
</style>
@endsection

@include('adminpannel.Seolinks.seolinkscss')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('changepoststatusdb')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="post_id" value="{{$post->id}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Update Post Status To Database</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<label>Post Name</label>
								<input type="text" required=""  name="post_name" class="form-control" placeholder="post name" value="{{$post->post_name}}" disabled="">
							</div>
							
							<div class="col-md-12">
								<label>Post Status</label>
								<select name="post_status" class="form-control">
									<?php $myArray=array("0"=>"De Active","1"=>"Active"); ?>
									@foreach($myArray as $opt_value=>$opt_name)
									<?php if($post->post_status==$opt_value){ ?>
										<option selected="" value="{{$opt_value}}">{{$opt_name}}</option>
									<?php } else{ ?>
										<option value="{{$opt_value}}">{{$opt_name}}</option>
									<?php } ?>
									@endforeach
								</select>
							</div>
						
						



						<div class="row">
							<div class="col-md-12">
								<button type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary btn-block subm">Update Post</button>
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
