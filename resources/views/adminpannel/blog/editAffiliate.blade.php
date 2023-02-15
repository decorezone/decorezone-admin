@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('add-affiliate-to-post')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="post_id" value="{{$post_id}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Add New Product to {{$post->post_name}}</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-6">
								<label>Product Title</label>
								<input class="form-control" type="name" placeholder="Please Enter Product Title" name="product_title">
							</div>
							<div class="col-xs-3">
								<label>Featured Image</label>
								<input type="file" name="featured_image">
							</div>
							<div class="col-xs-2">
								<label>Status</label>
								<select class="form-control" name="status">
									<option value="0">De Active</option>
									<option value="1">Active</option>
								</select>
							</div>
							
						</div>
						<br>
						<div class="row">
							<div class="col-xs-8">
								<label>Description</label>
								<input class="form-control" placeholder="Please Enter Description" name="description">
							</div>
							<div class="col-xs-2">
								<label>Sequence/Seriel/Order</label>
								<input type="number" class="form-control" placeholder="Please Enter Sequence" name="series">
							</div>
							<div class="col-xs-2">
								<label>Action</label>
								<button type="submit" name="submit" class="btn btn-block btn-primary btn-flat">Update</button>
							</div>
							
							
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			@if (count($errors) > 0 || session('success'))
			<div class="col-md-12" style="font-size: 18px;">
				@if (count($errors) > 0)
				@foreach ($errors->all() as $error)
				<p class="text-red">
					{{ $error }}<br>
				</p>
				@endforeach
				@endif
				@if (session('success'))
				<p class="text-green">
					{{ session('success') }}
				</p>
				@endif
			</div>
			@endif
		</div>
	</form>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">All Products</h3>
					<div class="box-tools">
						
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table" border="2">
						<tbody>
							<tr style="background-color:#222d32;color: white;">
								<th>Series</th>
								<th>Name</th>
								<th>Details</th>
								<th>Image</th>
								<th>Status</th>
								<th style="text-align: center;">Action</th>
							</tr>
							@foreach($products as $s)
							<tr>
								<td>{{$s->series}}</td>
								<td>{{$s->product_title}}</td>
								<td><ul>
									<li>Created AT: {{\Carbon\Carbon::parse($s->created_at)->format('d F Y')}}</li>
									<li>Updated AT: {{\Carbon\Carbon::parse($s->updated_at)->format('d F Y')}}</li>
									<hr>
									<li> {{$s->description}}</li>
								</ul>
									</td>
								<td><img src="{{ URL::asset('products/'.$s->pic_folder.'/'.$s->featured_image) }}" alt="" style="width:200px;height: 120px; "></td>
								<?php  
								if($s->status==0){
									?>
									<td><span class="badge bg-red">DEACTIVE</span></td>
									<?php
								}
								if($s->status==1){
									?>
									<td><span class="badge bg-green">ACTIVE</span></td>
									<?php
								}
								?>
								<td>
									<a  href="{{ URL('editProduct',$s->id) }}" class="btn-xs  btn-primary btn-flat">Edit</a><br>
									<a  href="{{ URL('editPictureProduct',$s->id) }}" class="btn-xs  btn-primary btn-flat">+ Edit Pictures</a>
									<a  href="{{ URL('add-links-to-product',$s->id) }}" class="btn-xs  btn-primary btn-flat">Add Links</a>
									<br>

								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection