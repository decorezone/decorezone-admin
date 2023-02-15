<div class="row">
	<div class="col-md-12">
		<h1 class="price_bar heading_top">Contact Us</h1>
		<form  action="{{url('feedback')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="contact_us_div">
				<div class="col-md-12">
					@if (count($errors) > 0 || session('status_ok'))

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
					@endif
				</div>
				<div class="col-md-12">
					<label for="form_name">Full Name *</label>
					<input id="form_name" type="text" name="user_name" class="contact_us_div_form" placeholder="Please enter your Name *" required="required" data-error="Firstname is required.">

				</div>
				<div class="col-md-12">
					<label for="form_email">Email *</label>
					<input id="form_email" type="email" name="user_email" class="contact_us_div_form" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">

				</div>
				<div class="col-md-12">
					<label for="form_message">Message *</label>
					<textarea id="form_message" name="comments_text" class="contact_us_div_form contact_us_div_form_msg" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>

				</div>
				<div class="col-md-12">
					<label for="form_message"></label>
					<button type="submit" name="submit" class="btn btn-success btn-block">Send Your Message</button>

				</div>
			</div>
		</form>
		<p class="price_bar">Folow Us On Popular Social Media Platforms</p>
		<div class="contact_us_div">
			<div class="row">
				<div class="col-md-12 social_media">
					<a href="https://www.facebook.com/mobileinpakistan" class="icoFacebook" title="Facebook @mobileinpakistan"><i class="fa fa-facebook"></i>

					</a>
					<a href="https://twitter.com/MobileInPakist1" class="icoLinkedin" title="Twitter @MobileInPakist1"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/mobileinpakistan1/" class="icoFacebook" title="instagram @mobileinpakistan1"><i class="fa fa-instagram"></i></a>
					<a href="https://www.pinterest.com/mobileinpakistan/" class="icoLinkedin" title="Pinterest @mobileinpakistan"><i class="fa fa-pinterest"></i></a>
				</div>
			</div>


		</div>
		<p class="price_bar">Call Us From 9 AM To 6 PM (PKST)</p>
		<div class="contact_us_div">
			<div class="row">
				<div class="col-md-12 social_media">
					<h2 style="text-align: center;">0300-2611204</h2>
					<h2 style="text-align: center;">mobileinpak@gmail.com</h2>
				</div>
			</div>


		</div>



	</div>

</div>