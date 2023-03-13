@extends('adminpannel.master')
<style type="text/css">
.select2-container--default .select2-selection--single {


	display: block !important;
	width: 100% !important;
	height: 34px !important;
	padding: 6px 12px !important;
	font-size: 14px !important;
	line-height: 1.42857143 !important;
	color: #555 !important;
	background-color: #fff !important;
	background-image: none !important;
	border: 1px solid #ccc !important;
	border-radius: 4px !important;;

}

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
	background: aliceblue !important;
}
</style>

@section('adminpagedash')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Search Posts By Catagory</h3>
				</div>
				<div class="box-body">
					<form  action="{{url('search_Cat')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">

							<div class="col-md-8">
								<select name="cat_id" class="form-control">
									@foreach($category as $b)

									<option value="{{$b->id}}">{{$b->cat_name}}</option>

									@endforeach
								</select>
							</div>
							<div class="col-md-4">
								<button type="submit" name="submit"  class="btn btn-primary">Search</button>
								<a  href="{{url('addpost')}}" style="color: white;" class="pull-right btn btn-primary">+ Add New Post</a>
							</div>


						</div>
						
					</form>

				</div>

				<!-- /.box-body -->

			</div>
		</div>

		@if (count($errors) > 0 || session('status_ok') || session('warning'))
		<div class="row">
			<div class="col-md-12">
				<div class="box box-default">

					<div class="box-body">
						@if (count($errors) > 0)
						@foreach ($errors->all() as $error)
						<p style="color: red">{{ $error }}</p><br>
						@endforeach
						
						@endif
						@if (session('status_ok'))
						<p style="color: green">{{ session('status_ok') }}</p>
						
						@endif
						@if (session('warning'))
						<p style="color: red">{{ session('warning') }}</p>
						
						@endif

						
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
		@endif
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody><tr>
							<th>ID</th>
							<th>Post Name</th>
							<th>Catagory</th>
							<th>Author</th>
							<th>Status</th>
							<th>Created At</th>
							<th>Edit/Status</th>
						</tr>
						@foreach($post as $p)
						<tr>
							<td>{{$p->id}}</td>
							<td><h5>{{$p->post_name}}</h5><br>
								<img src="{{ URL::asset('post/'.$p->post_folder.'/'.$p->post_featured_image) }}" alt="{{$p->post_name}}" width="270" height="200">
							</td>
							<td>{{$p->cat_id}}</td>
							<td>{{$p->author->name}}</td>
						
								<td>

									<?php if($p->post_status==0){ ?>

										<span class="label label-danger">
											Not Active
										</span>
									<?php }


									else{ ?>

										<span class="label label-success">
											Active
										</span>
									<?php } ?>



								</td>


								<td>
									{{\Carbon\Carbon::parse($p->created_at)->format('d F Y')}}
									<br><br>
									<span class="label label-danger">
										<a  href="{{ URL('PostDeleteCompletely',$p->id) }}" style="color: inherit;">Delete Post Forever</a>
									</span>
								</td>
								<td>

									<ul class="order_ul" style="list-style: none;"> 

										<li><span class="label label-success">
											<a target="_blank" href="{{url('EditPost/'.$p->id)}}" style="color: inherit;">Edit</a>
										</span></li>
										<li><span class="label label-danger">
											<a target="_blank" href="{{url('ChangePostStatus/'.$p->id)}}" style="color: inherit;">Change Status</a>
										</span></li>
										<li><span class="label label-primary">
											<a target="_blank" href="{{ URL('EditPostPicture/'.$p->id) }}" style="color: inherit;">Pictures Edit</a>
										</span>
									</li>
									<li>
										<span class="label label-primary">
											<a target="_blank" href="{{ URL('PostSeoLinks/'.$p->id) }}" style="color: inherit;">SEO</a>
										</span>
									</li>
                                 <?php if($p->post_type==1){ ?>
									<!-- <li>
										<span class="label label-primary">
											<a target="_blank" href="{{ URL('editAffiliate/'.$p->id) }}" style="color: inherit;">Edit Affiliate</a>
										</span>
									</li> -->
									<li>
										<span class="label label-primary">
											<a target="_blank" href="{{ URL('editAffiliatePost/'.$p->id) }}" style="color: inherit;">Edit Affiliate Post</a>
										</span>
									</li>
								<?php } ?>


								</ul>

							</td>
						</tr>
						@endforeach


					</tbody></table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection