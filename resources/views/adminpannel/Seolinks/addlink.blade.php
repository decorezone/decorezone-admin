@extends('adminpannel.master')
@include('adminpannel.Seolinks.seolinkscss')
@section('adminpagedash')
<section class="content">
	<form  action="{{url('AddLinktodb')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Add Links</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<label>Link Name</label>
								<textarea required="" name="link_name" class="form-control"></textarea>
							</div>
							<div class="col-md-12">
								<label>Link Title</label>
								<textarea required="" name="link_title" class="form-control"></textarea>
							</div>

							
							<div class="col-md-12">
								<label>Description</label>
								<textarea required="" name="link_description" class="form-control"></textarea>
							</div>

							<div class="col-md-12">
								<label>Keyword</label>
								<textarea required="" name="link_keyword" class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary">Add SEO to Link</button>
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
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body table-responsive no-padding">
					@foreach($linkseo as $link)
					<div class="col-md-12 items">
						<div class="box box-solid">
							<div class="box-header with-border">
								<i class="fa fa-text-width"></i>

								<h3 class="box-title">{{$link->link_name}}  <span class="label label-success"><a href="{{url('Editlinks/'.$link->id)}}" style="color: inherit;">Edit Seo of Link</a></span></h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<dl>
									<dt>Title</dt>
									<dd>{{$link->link_title}}</dd>
									<dt>Descriptipn</dt>
									<dd>{{$link->link_description}}</dd>
									<dd>Donec id elit non mi porta gravida at eget metus.</dd>
									<dt>Keyword</dt>
									<dd>{{$link->link_keyword}}</dd>
								</dl>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
                    <hr>
					@endforeach


					
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection