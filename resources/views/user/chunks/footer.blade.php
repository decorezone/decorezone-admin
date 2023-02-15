 <?php 
   $asset_version='25';
  ?>
<footer class="mainfooter" role="contentinfo">
	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 footercol">
					<!--Column1-->
					<div class="footer-pad">
						<h4>About Us</h4>
						<p>Pakistan Smartest portal for giving the daily updates of mobile phones prices, you can find detail description of every mobile, compare to other devices and smart phones and find your dream phone.
							You can also search mobile phone according to your budget , also you can find mobile phone according to you need like RAM, Memory and Camera, keep visiting our site
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 footercol">
					<!--Column1-->
					<div class="footer-pad">
						<h4>Top Brands</h4>
						<ul class="list-unstyled">
							
							<li><a href="{{url('Samsung-mobiles-price-in-pakistan')}}">Samsung Mobiles Prices</a></li>
							<li><a href="{{url('Huawei-mobiles-price-in-pakistan')}}">Huawei Mobiles Prices</a></li>
							<li><a href="{{url('Oppo-mobiles-price-in-pakistan')}}">Oppo Mobiles Prices</a></li>
							<li><a href="{{url('Apple-mobiles-price-in-pakistan')}}">Apple Mobiles Prices</a></li>
							<li><a href="{{url('Vivo-mobiles-price-in-pakistan')}}">Vivo Mobiles Prices</a></li>
							<li><a href="{{url('Nokia-mobiles-price-in-pakistan')}}">Nokia Mobiles Prices</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 footercol">
					<!--Column1-->
					<div class="footer-pad">
						<h4>Explore More</h4>
            
						<ul class="list-unstyled">
							  @foreach(\App\page::get_all_active_pages() as $page)
							<li><a href="{{url('mobileinpakistan/'.$page->page_url)}}">{{$page->page_name}}</a></li>
							 @endforeach

							<li><a href="{{url('blog')}}">Blog</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-3 footercol">
					<h4>Follow Us</h4>
					<ul class="social-network social-circle">
						<li><a href="https://www.facebook.com/mobileinpakistan" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/MobileInPakist1" class="icoLinkedin" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/mobileinpakistan1/" class="icoFacebook" title="Facebook"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.pinterest.com/mobileinpakistan/" class="icoLinkedin" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
					</ul>
					<hr>
					<ul class="ctx">

						<li class="phone">
							<i class="fa fa-phone"></i> Phone:  +92 300 2611204</li>
							<li class="email">
								<i class="fa fa-envelope"></i> mobileinpak@gmail.com</li>

							</ul>				
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 copy">
							<p class="text-center">&copy; Copyright 2019 - <a href="https://mobileinpakistan.com">MobileinPakistan&nbsp;</a>   
							</p>
						</div>
					</div>


				</div>
			</div>
		</footer>
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h6 class="modal-title">Search Any Mobile</h6>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						@include('user.chunks.side_bar_search')
					</div>
				</div>
			</div>
		</div>	
		<script src="{{ URL::asset('user/vendor/jquery/jquery.min.js?v='.$asset_version) }}"></script>
		<script src="{{ URL::asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js?v='.$asset_version) }}"></script>
		<script src="{{ URL::asset('user/css/select2.min.js?v='.$asset_version) }}"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				function formatState(state) {
					if (!state.id) return state.text;
					var baseUrl = "{{ asset('mobile_pics/') }}";
					var $state = $(
						'<ul id="search_list"><li><a href="/'+state.mobile_url+'-price-in-pakistan" class="image">'+
						'<img src="'+baseUrl+'/' +
						state.pic_folder+'/'+state.main_pic+
						'" alt="'+state.mobile_url+'price in Paksitan" title="'+state.mobile_url+'price in Paksitan" /></a><div class="content"><a href="/'+state.mobile_url+'-price-in-pakistan"><h6>'+state.text+'</h6><p class=top_mobile_name>'+state.text+'</p><p class="top_price">RS:&nbsp; '+state.pkr_price+'</p></a></div></li><ul>'
						);
					return $state;
				}

				function formatStateSelection(state) {
					if (!state.id) return state.text;
					var $state = $(
						'<ul id="search_list"><li><a href="/'+state.brand_name+'/'+state.mobile_url+'" class="image">'+state.text+'</a></li><ul>'
						);
					return $state;
				}
				$('.mobile_search').select2({
					placeholder: 'Search any Mobile by name or Brand ',
					closeOnSelect: false,
					ajax: {
						url: '/autocomplete',
						dataType: 'json',
						delay: 250,
						processResults: function (data) {
							return {
								results:  $.map(data, function (item) {
									return {
										text: item.mobile_name,
										id: item.id,
										pic_folder:item.pic_folder,
										main_pic:item.main_pic,
										pkr_price:item.pkr_price,
										brand_name:item.brand_name,
										mobile_url:item.mobile_url
									}

								})
							};
						},
						cache: true
					},

					templateResult: formatState,
					templateSelection: formatStateSelection,
					escapeMarkup: function(m) { 
						return m; 
					}
				});
			});
		</script>

	</body>