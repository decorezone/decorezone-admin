@extends('layout.main')
@section('content')
<div class="row">
	@include('adminpannel.chunks.error_and_success')
	<!-- Basic SEO Info/General -->
	<div class="span6">
		<div class="widget">
			<div class="widget-header"> <i class="icon-ok"></i>
				<h3> SEO / Add / Update</h3>
			</div>
			<!-- /widget-header -->
			<form  action="{{url('admin/pages/seo/page_seo_update')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="seo_id" value="{{$page_seo->id}}">
				<input type="hidden" name="page_check" value="{{$listing}}">
				<div class="widget-content">


					<ul class="news-items">
						<li>
							<div class="news-item-detail"> <a href="#" class="news-item-title">Title</a>
							
								<textarea rows="6" required="" name="link_title" class="form-control">{{$page_seo->link_title}}</textarea>
							</div>

						</li>
						<li>
							<div class="news-item-detail"> <a href="#" class="news-item-title">Keywords</a>
								<textarea rows="6" required="" name="link_keyword" class="form-control">{{$page_seo->link_keyword}}</textarea>
							</div>

						</li>
						<li>
							<div class="news-item-detail"> <a href="#" class="news-item-title">Description</a>
								<textarea rows="6" required="" name="link_description" class="form-control">{{$page_seo->link_description}}</textarea>
							</div>

						</li>
						<li>
							<button type="submit" name="submit"  class="btn btn-primary" style="float: right;">Add/Update SEO</button>
						</li>

					</ul>




				</div>
			</form>
				<!-- /widget-content --> 
			</div>
		</div>
		<div class="span6">
			<div class="widget widget-nopad">
				<div class="widget-header"> <i class="icon-list-alt"></i>
					<h3> SEO</h3>
				</div>
				<!-- /widget-header -->
				<div class="widget-content">
					<ul class="news-items">
						<li>
							<div class="news-item-detail"> <a href="#" class="news-item-title">Title</a>
								<p class="news-item-preview"> {{$page_seo->link_title}} </p>
							</div>

						</li>
						<li>
							<div class="news-item-detail"> <a href="#" class="news-item-title">Keywords</a>
								<p class="news-item-preview"> {{$page_seo->link_keyword}} </p>
							</div>

						</li>
						<li>
							<div class="news-item-detail"> <a href="#" class="news-item-title">Description</a>
								<p class="news-item-preview"> {{$page_seo->link_description}} </p>
							</div>

						</li>


					</ul>
				</div>
				<!-- /widget-content --> 
			</div>
		</div>
	</div>
@endsection