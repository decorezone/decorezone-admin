@extends('adminpannel.master')
@include('adminpannel.Seolinks.seolinkscss')
@section('adminpagedash')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Catagories Table</h3>
					<div class="box-tools">
						
						<a  href="{{ URL('addcat') }}" class="btn btn-primary"  style="color: white;font-size: 12px;">+ Add New Catagory</a>

					</div>
				</div>

				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody><tr>
							<th>Name</th>
							<th>Updated At</th>
							<th>Parent-Catagory</th>
							<th>Status</th>
							<th>Order</th>
							<th>Action</th>
						</tr>
						@foreach($category as $cat)
						<tr>
							<td>{{$cat->cat_name}} </td>
							<td>{{\Carbon\Carbon::parse($cat->updated_at)->format('d F Y')}}</td>
							<td>@if($cat->parent_cat)
								{{$cat->parent_cat->cat_name}}
								@endif
							</td>
							
							<?php  
							if($cat->cat_status==0){
								?>
								<td><span class="label label-danger">DEACTIVE</span></td>
								<?php
							}
							if($cat->cat_status==1){
								?>
								<td><span class="label label-success">ACTIVE</span></td>
								<?php
							}
							?>
								<?php  
							if($cat->cat_featured==0){
								?>
								<td><span class="label label-danger">Not Featured</span></td>
								<?php
							}
							if($cat->cat_featured==1){
								?>
								<td><span class="label label-success">Featured</span></td>
								<?php
							}
							?>

							<td><button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-default">
								View
							</button>
								<span class="label label-primary">
											<a target="_blank" href="{{ URL('editCatagory/'.$cat->id) }}" style="color: inherit;">Edit Cat</a>
										</span>
							<!-- <a  class="btn btn-xs btn-primary" href="{{ URL('EditCatagory',$cat->id) }}">Edit</a> -->
							<div class="modal fade" id="modal-default">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span></button>
												<h4 class="modal-title">Default Modal</h4>
											</div>
											<div class="modal-body">
												<div class="box box-solid">
													<div class="box-header with-border">
														<i class="fa fa-text-width"></i>
														<h3 class="box-title">{{$cat->cat_name}}</h3>
													</div>

													<div class="box-body" style="max-height: calc(100vh - 200px);
													overflow-y: auto;">
													<dl>
														<dt>URL</dt>
														<dd>{{$cat->cat_url}}</dd>
														<dt>Title</dt>
														<dd>{{$cat->cat_title}}</dd>
														<dt>Keywords</dt>
														<dd>{{$cat->cat_meta}}</dd>

														<dt>Description</dt>
														<dd>{{$cat->cat_short}}</dd>

														

													</dl>
												</div>

											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
										</div>
									</div>

								</div>

							</div>
						</td>
					</tr>
					@endforeach
				</tbody></table>
			</div>

		</div>

	</div>
</div>

</section>

@endsection