@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('UpdateSliderImage')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="slider_id" value="{{$slider->id}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Update New Slide Image</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-6">
								<input class="form-control" type="name" placeholder="Please Enter Slider Name" name="slider_name" value="{{$slider->slider_name}}"> 
							</div>
							<div class="col-xs-3">
								<input type="file" name="slider_image" name="slider_image">
							</div>
							<div class="col-xs-2">
								<select class="form-control" name="slider_status">
									<?php $myArray=array("0"=>"De Active","1"=>"Active"); ?>
									@foreach($myArray as $opt_value=>$opt_name)
									<?php if($slider->slider_status==$opt_value){ ?>
										<option selected="" value="{{$opt_value}}">{{$opt_name}}</option>
									<?php } else{ ?>
										<option value="{{$opt_value}}">{{$opt_name}}</option>
									<?php } ?>
									@endforeach
								</select>
							</div>
							<div class="col-xs-1">
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
								
							</tr>
							
							<tr>
								<td>{{$slider->slider_name}}</td>
								<td>{{\Carbon\Carbon::parse($slider->created_at)->format('d F Y')}}</td>
								<td>{{\Carbon\Carbon::parse($slider->updated_at)->format('d F Y')}}</td>
								<td><img src="{{ URL::asset('Slider/'.$slider->slider_folder.'/'.$slider->slider_image) }}" alt="" style="width:200px;height: 120px; "></td>
								<?php  
								if($slider->slider_status==0){
									?>
									<td><span class="badge bg-red">DEACTIVE</span></td>
									<?php
								}
								if($slider->slider_status==1){
									?>
									<td><span class="badge bg-green">ACTIVE</span></td>
									<?php
								}
								?>
								
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