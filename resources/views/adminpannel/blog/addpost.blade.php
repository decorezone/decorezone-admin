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
	<form  action="{{url('AddPostToDb')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Add Post To Database</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<label>Post Name</label>
								<input type="text" required=""  name="post_name" class="form-control" placeholder="post name">
							</div>
							<div class="col-md-6">
								<label>Catagory</label>
								<select name="cat_id" class="form-control">
									@foreach($category as $b)

									<option value="{{$b->id}}">{{$b->cat_name}}</option>

									@endforeach
								</select>	
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<label>Featured Post Images</label>
								<input type="file" name="post_featured_image" class="form-control">
							</div>
							<div class="col-md-12">
								<label>Post Seo Title</label>
								<input type="text" name="post_titile" class="form-control" placeholder="post title">
							</div>

							<div class="col-md-12">
								<label>Post Seo Meta</label>
								<textarea required="" name="post_meta" class="form-control"></textarea>
							</div>

							<div class="col-md-12">
								<label>Post Seo Short Descrption</label>
								<textarea required="" name="post_short" class="form-control"></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Status</label>
								<select name="post_status"  class="form-control">
									<option value="0">Hide</option>
									<option value="1">Show</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Type</label>
								<select name="post_type"  class="form-control">
									<option value="0">Informative</option>
									<option value="1">Affiliate Marketing</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Featured Post</label>
								<select name="post_featured"  class="form-control">
									<option value="0">Not Featured</option>
									<option value="1">Featured</option>
								</select>
							</div>
						</div>


						<div class="row" style="padding: 20px;">
							<div class="col-md-12">
								<div class="box">

									<h4 style="font-weight: bolder;">post_description</h4>
									<div class="box-body pad">
									
											<textarea required class="textarea" name="post_description" placeholder="Place some text here"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
										
									</div>
								</div>
							</div>
						</div>





						<div class="row">
							<div class="col-md-12">
								<button type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary btn-block subm">Add Post</button>
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
