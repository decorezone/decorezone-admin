<div class="row" id="accessory_type">
	<div class="col-md-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title">Accessory Type</h3>
			</div><!-- /.box-header -->
			<div class="box-body">

				<table class="table  table-bordered ">
					<tbody><tr>
						<th>ID</th>
						<th>Name</th>
						<th>Status</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
					@foreach($accessory_type as $type)
					<tr>
						<td>{{$type->id}}</td>
						<td>{{$type->accessory_type_name}}<br>
							<img src="{{ URL::asset('accessories/'.$type->folder.'/'.$type->logo) }}" alt="">

						</td>

						<td>
							<ul class="order_ul" style="list-style: none;"> 

								<li>
									<?php if($type->accessory_type_status==0){ ?>

										<span class="label label-danger">
											Not Active
										</span>
									<?php } ?>
								</li>
								<li>
									<?php if($type->accessory_type_status==1){ ?>

										<span class="label label-success">
											Active
										</span>
									<?php } ?>
								</li>
								<li>
									<?php if($type->top_accessory_type==0){ ?>

										<span class="label label-danger">
											Not Top type
										</span>
									<?php } ?>
								</li>
								<li>
									<?php if($type->top_accessory_type==1){ ?>

										<span class="label label-success">
											Top Type
										</span>
									<?php } ?>
								</li>



							</ul>
						</td>
						<td>
							{{\Carbon\Carbon::parse($type->created_at)->format('d F Y')}}
						</td>
						<td>


							<ul class="order_ul" style="list-style: none;"> 

								<li><span class="label label-success">
									<a href="{{url('admin/EditAccessoryType
									/'.$type->id)}}" style="color: inherit;">Edit</a>
								</span></li>

								



							</ul>

						</td>
					</tr>
					<tr>
						<td colspan="5">
							<span class="label label-info">Title</span>
							{{$type->accessory_type_title}}
						</td>
					</tr>
					<tr>
						<td colspan="5">
							<span class="label label-info">Keyword</span>
							{{$type->accessory_type_keyword}}
						</td>
					</tr>
					<tr>
						<td colspan="5">
							<span class="label label-info">Description</span>
							{{$type->accessory_type_description}}
						</td>
					</tr>
					@endforeach



				</tbody>

			</table>

		</div><!-- /.box-body -->
	</div>
</div>
</div>
