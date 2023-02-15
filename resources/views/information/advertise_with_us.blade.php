@extends('user.master')
@section('seo')
@if($linkseo)
<title>{{$linkseo->link_title}}</title>
<meta name="description" content="{{$linkseo->link_description}}">
<meta name="keywords" content="{{$linkseo->link_keyword}}">
@endif
@endsection
@section('userdash')
<div class="container"  id="main_container">
  <div class="row" style="margin-top: 5px;">
    <div class="col-lg-3" id="a" style="margin-top:5px;">
      <img src="{{ URL::asset('user/150x600.jpg') }}" style="float:right;" alt="" class="hide_me_on_mobile">

    </div>
    <div class="col-lg-6" s id="b" style="margin-top:5px;width: 100%;">
      <div id="about" class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 style="border-bottom: 1px solid;">Advertise with Us</h2>
                       
            <p>We have multiple section on website, where you can place your ads, following are some section where we can place the ads to promote your business.</p>


            <p><strong>Main Website or Home Page:</strong></p>
            
               <ul>
              <li>Home Page Slider Section</li>
<li>Main Website Left Section (3 Places)</li>
<li>Right Sidebar (2 Places)</li>

            </ul>
             <p><strong>Single Mobile Details:</strong></p>
            
            <ul>
              <li>Left Section (3 Places)</li>
              <li>Right Sidebar (2 Places)</li>

            </ul>
              <p><strong>Blog Section</strong></p>
            
            <ul>
              <li>Left Section (2 Places)</li>
              <li>Right Sidebar (1 Places)</li>

            </ul>
            
             
              

            
          </div>
          
          <div class="col-md-12">
						 <h2 style="border-bottom: 1px solid;">For Prices Please Contact Us or Call Us</h2>
						
						<hr>
						<form  action="{{url('feedback')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="messages"></div>

							<div class="controls">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_name">Full Name *</label>
											<input id="form_name" type="text" name="user_name" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Firstname is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									

								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_email">Email *</label>
											<input id="form_email" type="email" name="user_email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_message">Message *</label>
											<textarea id="form_message" name="comments_text" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-md-12">
										<p class="text-muted">
											<strong>*</strong>Your Email Will Not be share to any one
										</p>

									</div>
									<div class="col-md-12">
										<input type="submit" class="" value="Send message">
									</div>
								</div>

							</div>

						</form>

						
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
        <div class="row">
				<div class="col-md-12 mdcd">
				    <h3 style="color:white;text-align:center;">+92 300 2611204</h3>
				    <hr>
					<span style="">Follow US</span>
			<ul class="social-network social-circle">

						<li><a href="https://www.facebook.com/mobileinpakistan" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/MobileInPakist1" class="icoLinkedin" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/mobileinpakistan1/" class="icoFacebook" title="Facebook"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.pinterest.com/mobileinpakistan/" class="icoLinkedin" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
				</div>
      </div>
    </div>
    <div class="col-lg-3"  id="c">
      @include('user.chunks.side_bar_search')
    </div>
  </div>
</div>
@endsection
