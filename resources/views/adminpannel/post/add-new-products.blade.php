<div class="modal fade" id="add-new-products" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
					<h4 class="modal-title">Add New Product to {{$post->post_name}}</h4>
				</div>
				<div class="modal-body">
					<form  action="{{url('add-affiliate-to-post')}}" method="post" class="form-submit" id="post-new-product-data" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="post_id" value="{{$post->id}}">

						<div class="row">
							<div class="loading" id="loading" style="display:none">
								<p style="text-align:center;">Please Wait! Data is Uploading</p>
								<img src="{{ URL::asset('giphy.gif') }}" width="100" height="100" style="display: block;
								margin-left: auto;
								margin-right: auto;">
							</div>
							<div class="col-md-12" id="Product-Body">
								<div class="box box-danger">

									<div class="box-body">
										<div class="row">
											<div class="col-xs-12">
												<label>Product Title</label>
												<input class="form-control" type="text" placeholder="Please Enter Product Title" name="product_title" required="">
											</div>

											<div class="col-xs-4">
												<label>URL</label>
												<input class="form-control" type="text" placeholder="Please Enter URL" name="featured_link_url" required="">
											</div>
											<div class="col-xs-4">
												<label>URL Link Image</label>
												<input type="file" class="form-control" name="featured_link_image" required="">
											</div>
											<div class="col-xs-4">
												<label>Ratting Star</label>
												<input type="text" class="form-control" placeholder="Ratting Star" name="ratting_star" required="">
											</div>
											<div class="col-xs-4">
												<label>Product Price</label>
												<input type="number" class="form-control" placeholder="Product Price" name="price" required="">
											</div>
											<div class="col-xs-4">
												<label>Total Reviews Star</label>
												<input type="number" class="form-control" placeholder="Total Reviews" name="total_reviews" required="">
											</div>
											<div class="col-xs-4">
												<label>Product Status</label>
												<select class="form-control" name="status" required="">
													<option value="0">De Active</option>
													<option value="1">Active</option>
												</select>
											</div>
											<div class="col-xs-4">
												<label>Featured Image</label>
												<input class="form-control" type="file" name="featured_image" required="">
											</div>
											<div class="col-xs-4">
												<label>Other Pictures</label>
												<input class="form-control" type="file" accept="image/png,image/jpg,image/jpeg" multiple name="slider_images[]" required="">
											</div>
											<div class="col-xs-4">
												<label>Series</label>
												<input type="number" class="form-control" placeholder="Sequence" name="series" required="">
											</div>


										</div>
										<br>
										<div class="row">
											<div class="col-xs-12">
												<label>Description</label>
												<textarea  class="form-control" id="textAreaExample6" rows="3" placeholder="Please Enter Description" name="description" required=""></textarea>
											</div>
											<div class="col-xs-12">
												<label>Action</label>
												<button type="submit" name="submit" class="btn btn-block btn-primary btn-flat">ADD NEW PRODUCT</button>
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


				</div>
<!-- <div class="modal-footer">
<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div> -->
</div>

</div>

</div>