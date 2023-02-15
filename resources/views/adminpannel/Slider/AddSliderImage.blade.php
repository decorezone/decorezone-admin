@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('AddSliderImageDb')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Add New Slide Image</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-6">
								<input class="form-control" type="name" placeholder="Please Enter Slider Name" name="slider_name">
							</div>
							<div class="col-xs-3">
								<input type="file" name="slider_image" name="slider_image">
							</div>
							<div class="col-xs-2">
								<select class="form-control" name="slider_status">
									<option value="0">De Active</option>
									<option value="1">Active</option>
								</select>
							</div>
							<div class="col-xs-1">
								<button type="submit" name="submit" class="btn btn-block btn-primary btn-flat">Add</button>
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
					<h3 class="box-title">All Category</h3>
					<div class="box-tools">
						
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table" border="2">
						<tbody>
							<tr style="background-color:#222d32;color: white;">
								<th>Name</th>
								<th>Created At</th>
								<th>Updated At</th>
								<th>Image</th>
								<th>Status</th>
								<th style="text-align: center;">Action</th>
							</tr>
							@foreach($slider as $s)
							<tr>
								<td>{{$s->slider_name}}</td>
								<td>{{\Carbon\Carbon::parse($s->created_at)->format('d F Y')}}</td>
								<td>{{\Carbon\Carbon::parse($s->updated_at)->format('d F Y')}}</td>
								<td><img src="{{ URL::asset('Slider/'.$s->slider_folder.'/'.$s->slider_image) }}" alt="" style="width:200px;height: 120px; "></td>
								<?php  
								if($s->slider_status==0){
									?>
									<td><span class="badge bg-red">DEACTIVE</span></td>
									<?php
								}
								if($s->slider_status==1){
									?>
									<td><span class="badge bg-green">ACTIVE</span></td>
									<?php
								}
								?>
								<td>
									<a  href="{{ URL('EditSlider',$s->id) }}" class="btn-xs  btn-primary btn-flat">Edit</a>
									<br>
									<a  href="{{ URL('SliderDelete',$s->id) }}" class="btn-xs  btn-danger btn-flat">Delete Slider</a>

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