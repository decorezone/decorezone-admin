@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('storeLinks')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="product_id" value="{{$productid}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Add New Link to {{$product->product_title}}</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-6">
								<label>URL</label>
								<input class="form-control" type="name" placeholder="Please Enter URL" name="featured_link_url">
							</div>
							<div class="col-xs-3">
								<label>Featured Image</label>
								<input type="file" name="featured_link_image">
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
							<div class="col-xs-3">
								<label>Ratting Star</label>
								<input type="number" class="form-control" placeholder="Ratting Star" name="ratting_star" max="5" min="1">
							</div>
							<div class="col-xs-3">
								<label>price</label>
								<input type="number" class="form-control" placeholder="price" name="price">
							</div>
							<div class="col-xs-2">
								<label>Total Reviews Star</label>
								<input type="number" class="form-control" placeholder="Total Reviews" name="total_reviews">
							</div>
							
							<div class="col-xs-2">
								<label>Action</label>
								<button type="submit" name="submit" class="btn btn-block btn-primary btn-flat">ADD LiNK</button>
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
								<th>Link</th>
								<th>Star</th>
								<th>Update</th>
								<th>Price</th>
								<th>Reviews</th>
								<th>Image</th>
								<th>Status</th>
								<th style="text-align: center;">Action</th>
							</tr>
							@foreach($affiliate_links as $link)
							<tr>
								<td>{{$link->featured_link_url}}</td>
								<td>{{$link->ratting_star}}/5</td>
								<td><ul>
									<li>Created AT: {{\Carbon\Carbon::parse($link->created_at)->format('d F Y')}}</li>
									<li>Updated AT: {{\Carbon\Carbon::parse($link->updated_at)->format('d F Y')}}</li>
									<hr>
								</ul>
									</td>
								<td>{{$link->price}}</td>
								<td>{{$link->total_reviews}}</td>
								<td><img src="{{ URL::asset('linksFolder/'.$link->featured_link_folder.'/'.$link->featured_link_image) }}" alt="" style="width:200px;height: 120px; "></td>
								<?php  
								if($link->status==0){
									?>
									<td><span class="badge bg-red">DEACTIVE</span></td>
									<?php
								}
								if($link->status==1){
									?>
									<td><span class="badge bg-green">ACTIVE</span></td>
									<?php
								}
								?>
								<td>
									<a  href="{{ URL('editProductLink',$link->id) }}" class="btn-xs  btn-primary btn-flat">Edit</a><br>
									<a  href="{{ URL('editPicturelinks',$link->id) }}" class="btn-xs  btn-primary btn-flat">+ Edit Pictures</a>
									<hr>
									<a  href="{{ URL('editAffiliate',$product->post_id) }}" class="btn-xs  btn-primary btn-flat"><- Back </a>
									

									

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