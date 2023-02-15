<div class="modal fade" id="pid{{$product->id}}" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
					<h4 class="modal-title">Edit {{$product->product_title}}</h4>
				</div>
				<div class="modal-body">
					<form id="product_form{{$product->id}}"  action="{{url('edit_product_of_post')}}" method="post" class="form-submit edit_product" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="product_id" value="{{$product->id}}">

						<div class="row">
							<div class="editloading" id="editloading" style="display:none">
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
												<input class="form-control" type="text" placeholder="Please Enter Product Title" name="product_title" required="" value="{{$product->product_title}}">
											</div>

											<div class="col-xs-8">
												<label>URL</label>
												<input class="form-control" type="text" placeholder="Please Enter URL" name="featured_link_url" required="" value="{{$product->link_url}}">
											</div>
											
											<div class="col-xs-4">
												<label>Ratting Star</label>
												<input type="text" class="form-control" placeholder="Ratting Star" name="ratting_star" required="" value="{{$product->ratting}}">
											</div>
											<div class="col-xs-4">
												<label>Product Price</label>
												<input type="number" class="form-control" placeholder="Product Price" name="price" required="" value="{{$product->price}}">
											</div>
											<div class="col-xs-4">
												<label>Total Reviews Star</label>
												<input type="number" class="form-control" placeholder="Total Reviews" name="total_reviews" required="" value="{{$product->total_reviews}}">
											</div>
											<div class="col-xs-4">
												<label>Product Status</label>
												<select class="form-control" name="status" required="">
													<option value="0" {{ $product->status==0 ? 'selected' : '' }}>Hide</option>
										<option value="1" {{ $product->status==1 ? 'selected' : '' }}>Show</option>
												</select>
											</div>
											
											<div class="col-xs-4">
												<label>Series</label>
												<input type="number" class="form-control" placeholder="Sequence" name="series" required="" value="{{$product->series}}">
											</div>
											<div class="col-xs-4">

											</div>
											<div class="col-xs-4">
												
											</div>


										</div>
										<br>
										<div class="row">
											<div class="col-xs-12">
												<label>Description</label>
												<textarea  class="form-control" id="textAreaExample6" rows="3" placeholder="Please Enter Description" name="description" required="">{{$product->description}}
												</textarea>
											</div>
											<div class="col-xs-12">
												<label>Action</label>
												<button type="submit" name="submit" class="btn btn-block btn-primary btn-flat editbtn">Update PRODUCT</button>
											</div>


										</div>
									</div>
									<!-- /.box-body -->
								</div>
							</div>
						
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