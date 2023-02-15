@extends('layout.main')
@section('content')
<div class="row">
	@include('adminpannel.chunks.error_and_success')
</div>
<div class="row">
	<div class="span12">
		<div class="widget widget-table action-table">
			<div class="widget-header"> <i class="icon-th-list"></i>
				<h3>Picture Edit

                    <a target="_blank" href="{{url($page->page_url)}}-price-in-pakistan">{{$page->page_name}}</a>
				</h3>
			</div>
			<!-- /widget-header -->
			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>File Name</th>
							<th>Image</th>
							<th>Folder & Location</th>
							<th>Featured Action</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody id="laodmepics">
						@include('adminpannel.pages.UpdatePictureDiv')

					</tbody>
				</table>
			</div>
			<!-- /widget-content --> 
		</div>
	</div>
	<div class="span12">
		<div class="widget widget-table action-table">
			<div class="widget-header"> <i class="icon-th-list"></i>
				<h3>Picture Upload</h3>
			</div>
			<!-- /widget-header -->
			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Images</th>

							
							<th>Submit</th>
						</tr>
					</thead>
					<tbody>
						<form  action="{{url('admin/pages/upload_pictures')}}" method="post"  id="upload" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="page_id" value="{{$page->id}}" id="page_id">
							<input type="hidden" name="edit_mode" value="1">
							<tr>
								
								<td><input type="file" accept="image/png,image/jpg,image/jpeg" multiple name="file[]"></td>
								<td><button type="submit" name="submit" class="btn btn-success">Upload/Edit</button></td>
							</tr>
						</form>
					</tbody>
				</table>
			</div>
			<!-- /widget-content --> 
		</div>
	</div>
</div>


@endsection


@section('js')

<script type="text/javascript">

	jQuery(document).ready(function($){
		$(document).on("click", ".clickme", function(){
			var remove_item=$(this).attr('id');
			var page_id=$('#page_id').val();
			var r = confirm("Are You Sure To delete this File");
			if (r == true) {
				$.ajax({
					url: "{{url('admin/pages/pic_delete')}}/"+$(this).attr('id') + '/' +  page_id,
					type: "GET",
					success: function(data) {

						$("#laodmepics").empty();
						$("#laodmepics").html(data);

					}
				});
			}
		});
		$(document).on("click", ".clickmefeatured", function(){

			var page_id=$('#page_id').val();

			var r = confirm("Are You Sure To Make it Featured Image");
			if (r == true) {
				$.ajax({
					url: "{{url('admin/pages/make_me_featured')}}/"+$(this).attr('id') + '/' +  page_id,
					type: "GET",
					success: function(data) {
						$("#laodmepics").empty();
						$("#laodmepics").html(data);

					}
				});
			}
		});
			$(document).on("click", ".remove_me_fetured", function(){

			var page_id=$('#page_id').val();

			var r = confirm("Are You Sure To Remove Featured Image");
			if (r == true) {
				$.ajax({
					url: "{{url('admin/pages/remove_me_fetured')}}/"+$(this).attr('id') + '/' +  page_id,
					type: "GET",
					success: function(data) {
						$("#laodmepics").empty();
						$("#laodmepics").html(data);

					}
				});
			}
		});


		$(document).on("click", ".fix_page_pic_folder", function(){

			var page_id=$('#page_id').val();
			var r = confirm("Are You Sure To Fix this Folder");
			if (r == true) {
				$.ajax({
					url: "{{url('admin/pages/fix_page_pic_folder')}}/"+ page_id,
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