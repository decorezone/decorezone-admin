@extends('adminpannel.master')

@section('adminpagedash')
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">


</style>
<body>
	<section class="content">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header">
					<h3 class="box-title">Add Item Pics</h3>
				</div><!-- /.box-header -->


				<div class="box-body">
					<form  action="{{url('admin/add_item_pic')}}" method="post"  enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="accessory_item_id" value="{{$accessory_item->id}}">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Main Picture(Small)</label>
									<input type="file" name="item_pic" accept="image/png,image/jpg,image/jpeg" id="exampleInputFile">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Other Images</label>
									<input type="file" accept="image/png,image/jpg,image/jpeg" multiple name="file[]">


								</div>
							</div>							

							<!-- /.box-body -->
							<div class="col-md-12">

								<button type="submit" class="btn btn-primary">Submit</button>

							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
		@if (count($errors) > 0 || session('status_ok'))
		<div class="row">
			<div class="col-md-12">
				<div class="box box-default">

					<div class="box-body">
						@if (count($errors) > 0)
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><i class="icon fa fa-ban"></i> Alert!</h4>
							@foreach ($errors->all() as $error)
							{{ $error }}
							@endforeach
						</div>
						@endif
						@if (session('status_ok'))
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><i class="icon fa fa-check"></i>Reply</h4>
							{{ session('status_ok') }}
						</div>
						@endif
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
		@endif
		
       <div class="row">

		<div class="col-md-12">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header">
						<h3 class="box-title">Item Pics</h3>
					</div><!-- /.box-header -->


					<div class="box-body">
						<table class="table table-bordered	table-condensed">
							<th>Image</th>
							<th>Action</th>
						<tbody id="laodmepics">
							@include('adminpannel.accessories_item.partials.UpdatePictureDiv')
						</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
		</section>

		@endsection
		@section('javabee')

		<script type="text/javascript">

			jQuery(document).ready(function($){
				$(document).on("click", ".clickme", function(){
					$remove_item=$(this).attr('id');
					$accessory_item_id=$('#accessory_item_id').val();
					var r = confirm("Are You Sure To delete this File");
					if (r == true) {
						$.ajax({
							url: "{{url('admin/pic_delete_item')}}/"+$(this).attr('id') + '/' +  $accessory_item_id,
							type: "GET",
							success: function(data) {

								$("#laodmepics").empty();
								$("#laodmepics").html(data);

							}
						});
					}
				});
				$(document).on("click", ".clickmefeatured", function(){

					$accessory_item_id=$('#accessory_item_id').val();

					var r = confirm("Are You Sure To Make it Featured Image");
					if (r == true) {
						$.ajax({
							url: "{{url('admin/Pic_item_featured')}}/"+$(this).attr('id') + '/' +  $accessory_item_id,
							type: "GET",
							success: function(data) {
								$("#laodmepics").empty();
								$("#laodmepics").html(data);

							}
						});
					}
				});


			

			});
		</script>
		@endsection