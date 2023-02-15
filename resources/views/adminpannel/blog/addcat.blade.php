@extends('adminpannel.master')
@section('customcss')
<link rel="stylesheet" href="{{ URL::to('adminfiles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection
@include('adminpannel.Seolinks.seolinkscss')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('AddCatToDb')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Add Catagory To Database</h3>
					</div>
					<div class="box-body">
						<div class="row">

							<div class="col-md-8">
								<label>Catagory Name</label>
								<input type="text" name="cat_name" class="form-control" placeholder="category name">
							</div>
							<div class="col-md-4">
							<div class="form-group">
								<label>Featured Catagory</label>
								<select name="cat_featured"  class="form-control">
									<option>Please Select Featured Staus</option>
									<option value="0">Hide Featured</option>
									<option value="1">Show Featured</option>
								</select>
							</div>
						</div>
							
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="cars">Select Catagories:</label>
									<select name="cat"  class="form-control">
									<option value="">Please Select Parent Catagory Or Leave For Make this Parent</option>
									@foreach($parentCategory as $cat)
                                    
									<option value="{{$cat->id}}">{{$cat->cat_name}}</option>
									@endforeach
								</select>
									<!-- <select id="level" name="cat" class="form-control level" data-placeholder="Select an option" tabindex="-1" aria-hidden="true">

									</select> -->

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label>Catagory Title</label>
								<input type="text" name="cat_title" class="form-control" placeholder="category title">
							</div>

							<div class="col-md-12">
								<label>Catagory Meta-Keywords</label>
								<textarea required="" name="cat_meta" class="form-control"></textarea>
							</div>

							<div class="col-md-12">
								<label>Cat Short Descrption (for SEO)</label>
								<textarea required="" name="cat_short" class="form-control"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Featured Image</label>
								<input type="file" name="cat_image"  accept="image/png,image/jpg,image/jpeg">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Status</label>
								<select name="cat_status"  class="form-control">
									<option>Please Select Status</option>
									<option value="0">Hide</option>
									<option value="1">Show</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<label>Introduction and Page Content</label>

						</div>
						<div class="col-md-12">
							<textarea class="textarea" name="description" placeholder="Place some text here"
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary">Add</button>
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

@include('adminpannel.blog.partials.select_2')

@endsection