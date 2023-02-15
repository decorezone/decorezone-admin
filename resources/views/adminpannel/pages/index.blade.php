@extends('layout.main')
@section('content')
<div class="row">
	@include('adminpannel.chunks.error_and_success')
</div>
<div class="row">
	<div class="span12">
		<div class="widget widget-table action-table">
			<div class="widget-header"> 
				<span><h3> <i class="icon-file"></i>Create Pages On Your Website</h3></span>
				<a class="btn btn-small pull-right" style="margin-top: 7px;" href="{{url('admin/pages/create')}}"><i class="icon-file"></i>&nbsp;&nbsp;Create New Page</a>
			</div>

			<!-- /widget-header -->
			<div class="widget-content">
				<br>
				<form class="form-inline" action="{{url('MobilAdminSearch')}}" method="get"  enctype="multipart/form-data">

					<button  name="submit" type="submit">Search Mobiles</button>
				</form>
				<hr>
				
				
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Page Name</th>
							<th>Page Url</th>
							<th>Status</th>
							<th>Created At</th>
							<th class="td-actions">Edit/Status </th>
						</tr>
					</thead>
					<tbody>
						@foreach($pages as $page)
						<tr>
							<td>{{$page->id}}</td>
							<td>{{$page->page_name}}
							</td>
							<td><a  target="_blank" href="{{ URL('mobileinpakistan',$page->page_url) }}" style="color: inherit;">{{$page->page_url}}</a>
									
							</td>
							<td>

								<?php if($page->page_status==0){ ?>

									<span class="label label-danger">
										Not Active
									</span>
								<?php }


								else{ ?>

									<span class="label label-success">
										Active
									</span>
								<?php } ?>

								<hr>
								<?php if($page->contact_us_form_check==0){ ?>

									<span class="label label-danger">
										Contact Form Disabled
									</span>
								<?php }


								else{ ?>

									<span class="label label-success">
										Contact Form Active
									</span>
								<?php } ?>



							</td>


							<td>
								{{\Carbon\Carbon::parse($page->created_at)->format('d F Y')}}
								<hr>
								<!-- <span class="label label-danger">
									<a  href="{{ URL('pageileDeleteCompletely',$page->id) }}" style="color: inherit;">Delete</a>
								</span> -->
							</td>
							<td width="20%">
								<div class="controls">
									<a target="_blank" class="btn btn-primary btn-mini" href="{{ URL('admin/pages/'.$page->id.'/edit') }}"><i class="icon-pencil"></i> Edit</a>
									<a  class="btn btn-primary btn-mini" href="{{url('admin/pages/change_status/'.$page->id)}}"><i class="icon-move"></i> Change Status</a>
									<br><br>
									<a  class="btn btn-warning btn-mini" href="{{url('admin/pages/contact_us_form_check/'.$page->id)}}"><i class=" icon-phone-sign"></i> Attach Contact Form</a>
									<br><br>

									<a target="_blank" class="btn btn-success btn-mini" href="{{URL('admin/pages/pictures/'.$page->id) }}"><i class="icon-picture"></i> Pictures/Edit</a>
									<a target="_blank" class="btn btn-success btn-mini" href="{{ URL('admin/pages/seo/'.$page->id.'/edit') }}"><i class=" icon-trophy"></i> SEO</a>
								</div>

							</td>
						</tr>		

						@endforeach
						<tr>
							<td colspan="7">
								{{$pages->links()}}
							</td>
						</tr> 

					</tbody>
				</table>

				<!-- /shortcuts --> 
			</div>
			<!-- /widget-content --> 
		</div>
	</div>
</div>

@endsection