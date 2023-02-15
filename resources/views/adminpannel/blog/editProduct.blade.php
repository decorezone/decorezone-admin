@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('update-affiliate-to-post')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="post_id" value="{{$post->id}}">
		<input type="hidden" name="product_id" value="{{$product->id}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Update Product to {{$post->post_name}}</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-9">
								<label>Product Title</label>
								<input class="form-control" type="name" placeholder="Please Enter Product Title" name="product_title" value="{{$product->product_title}}">
							</div>
							<div class="col-xs-2">
								<label>Status {{$product->status}}</label>
								
								<select name="status"  class="form-control">
										<option value="0" {{ $product->status==0 ? 'selected' : '' }}>De Active</option>
										<option value="1" {{ $product->status==1 ? 'selected' : '' }}>Show</option>
									</select>
							</div>

							
						</div>
						<br>
						<div class="row">
							<div class="col-xs-8">
								<label>Description</label>
								<input class="form-control" placeholder="Please Enter Description" name="description" value="{{$product->description}}">
							</div>
							<div class="col-xs-2">
								<label>Sequence/Seriel/Order</label>
								<input type="number" class="form-control" placeholder="Please Enter Sequence" name="series" value="{{$product->series}}">
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
							
							<tr>
								<td>{{$product->series}}</td>
								<td>{{$product->product_title}}</td>
								<td><ul>
									<li>Created AT: {{\Carbon\Carbon::parse($product->created_at)->format('d F Y')}}</li>
									<li>Updated AT: {{\Carbon\Carbon::parse($product->updated_at)->format('d F Y')}}</li>
									<hr>
									<li> {{$product->description}}</li>
								</ul>
									</td>
								<td><img src="{{ URL::asset('products/'.$product->pic_folder.'/'.$product->featured_image) }}" alt="" style="width:200px;height: 120px; "></td>
								<?php  
								if($product->status==0){
									?>
									<td><span class="badge bg-red">DEACTIVE</span></td>
									<?php
								}
								if($product->status==1){
									?>
									<td><span class="badge bg-green">ACTIVE</span></td>
									<?php
								}
								?>
								<td>
									<a  href="{{ URL('editAffiliate',$post->id) }}" class="btn-xs  btn-primary btn-flat"><=Back</a><br>
									

								</td>
							</tr>
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