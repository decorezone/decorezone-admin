<div class="row mobiles-row">
					<div class="owl-carousel owl-theme">
							@foreach($latest_mobile as $mob)
									<div class="col-12 owl-col box">
											<div class="inner br-left-mobi-card mobi-card">
													<a href="{{url($mob->mobile_url)}}-price-in-pakistan">
															<div class="col-md-12 text-center">
																	<img src="{{ URL::asset('mobile_pics/'.$mob->pic_folder.'/'.$mob->main_pic) }}" alt="{{$mob->brand_name}} {{$mob->mobile_name}} price in Paksitan" title="{{$mob->brand_name}} {{$mob->mobile_name}} mobile price in Paksitan"class="ProductTopCell img-rounded">
															</div>
	
															<div class="col-md-12 text-center">														
																	<p class="mb-0">{{$mob->brand_name}}</p>
																	<p class="black-text-top mt-5-negative text-center mb-0">  {{ str_limit($mob->mobile_name, $limit = 20, $end = '...') }}</p>
																	<p class="red-text text-center mt-5-negative mb-0">RS:&nbsp; <?php $price = number_format($mob->pkr_price); ?><?php echo $price; ?></p>
															</div>

																<div class="text-left">
																	<hr class="mobi-separater">
																	<div class="col-md-12 title-small">Screen <span class="black-text">6.4"</span></div>
																	<div class="col-md-12 title-small">Camera <span class="black-text">Triple</span></div>
													
																	<div class="col-md-12 title-small">Ram <span class="black-text">4gb</span></div>
																	<div class="col-md-12 title-small">Battery <span class="black-text">6000mah</span></div>
																</div>	


												</a>
											</div>
								</div>	
								@endforeach



					

				</div>		
                  <p class="text-right more-p">more</p> 
			</div>

