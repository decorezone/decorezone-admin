@extends('adminpannel.master')
@include('adminpannel.Seolinks.seolinkscss')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('UpdateCatagoryMain')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="cat_id" value="{{$cat->id}}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Update Catagory To Database</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-8">
								<label>Catagory Name</label>
								<input type="text" name="cat_name" class="form-control" placeholder="category name" value="{{$cat->cat_name}}">
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
									<label>Featured</label>
									<select name="cat_featured"  class="form-control">
										<option value="0" {{ $cat->cat_featured==0 ? 'selected' : '' }}>Hide Featured</option>
										<option value="1" {{ $cat->cat_featured==1 ? 'selected' : '' }}>Show Featured</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label>Catagory</label>
								<select name="category_id" class="form-control">
									<option value="">Please Select Parent Catagory Or Leave For Make this Parent</option>
									@foreach($parentCategory as $parent)

									
									<?php if($parent->id==$cat->category_id){ ?>
										<option selected="" value="{{$parent->id}}">{{$parent->cat_name}}</option>
									<?php } else{ ?> 
										<option value="{{$parent->id}}">{{$parent->cat_name}}</option>
									<?php } ?>

									@endforeach
								</select>	
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Featured Image if you want to replce old one</label>
								<input type="file" name="cat_image"  accept="image/png,image/jpg,image/jpeg">
							</div>
						</div>
						<div class="col-md-4">
								<div class="form-group">
									<label>Status</label>
									<select name="cat_status"  class="form-control">
										<option value="0" {{ $cat->cat_status==0 ? 'selected' : '' }}>Hide Status</option>
										<option value="1" {{ $cat->cat_status==1 ? 'selected' : '' }}>Show Status</option>
									</select>
								</div>
							</div>
						</div>	
						
						<div class="row">

							<div class="col-md-12">
								<label>Catagory Title</label>
								<input type="text" name="cat_title" class="form-control" placeholder="category title" value="{{$cat->cat_title}}">
							</div>

							<div class="col-md-12">
								<label>Catagory Meta</label>
								<textarea required="" name="cat_meta" class="form-control">{{$cat->cat_meta}}</textarea>
							</div>

							<div class="col-md-12">
								<label>Cat Short Descrption</label>
								<textarea required="" name="cat_short" class="form-control">{{$cat->cat_short}}</textarea>
							</div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-12">
							<textarea class="textarea" name="description" placeholder="Place some text here"
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
								{{$cat->description}}
							</textarea>
						</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary">Update Catagory</button>
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
@section('javabee')

@include('adminpannel.blog.partials.select_2_edit')


@endsection