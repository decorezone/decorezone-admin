@extends('layout.main')
@section('css')
@endsection

@section('content')
<div class="row">
	@include('adminpannel.chunks.error_and_success')
</div>
<div class="row">

	<form  action="{{url('admin/pages/update/')}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="page_id" value="{{$page->id}}">

		<div class="span12">
			<div class="widget">
				<div class="widget-header"> <i class="icon-file"></i>
					<h3>Update Pages Data</h3>
				</div>
				<!-- /widget-header -->

				<div class="widget-content">
					<div class="span3 inline_span">
						<label>Page Name</label>
						<input type="text"  value="{{ old('page_name', $page->page_name) }}" name="page_name" />

					</div>
					<div class="span3 inline_span">
						<label>Page Url</label>
						<input type="text"  value="{{ old('page_url', $page->page_url) }}" name="page_url" />

					</div>
					<div class="span3 inline_span">
						<label>Submit</label>
						<button type="submit" name="submit" class="btn btn-success">Update Page</button>

					</div>




				</div>

				<!-- /widget-content --> 
			</div>
		</div>

		<div class="span12">
			<textarea name="page_content">{{ old('page_content', $page->page_content) }}</textarea>
		</div>
	</form>
	<!-- Basic Mobile Info/General -->
	
</div>

@endsection
@section('js')
<script src="{{ URL::asset('admin/ckeditor/ckeditor.js?v='.env('asset_version')) }}"></script>
<script>
	CKEDITOR.replace( 'page_content' );
</script>
@endsection