@foreach($Similar_Mobile as $sim)
<tr>
	<td class="td" align="center" valign="center">
						<a href="{{url($sim->mobile_url)}}-price-in-pakistan">
							<figure>
								<img src="{{ URL::asset('mobile_pics/'.$sim->pic_folder.'/'.$sim->main_pic) }}" alt="{{$sim->brand_name}} {{$sim->mobile_name}} price in Paksitan" title="{{$sim->brand_name}} {{$sim->mobile_name}} mobile price in Paksitan" class="ProductTopCell img-rounded" style="height: 100px;width: 45px;">
								<div class="caption">
									<p class="">{{$sim->brand_name}}</p>

									<p class="mobile_name">{{$sim->mobile_name}}</p>

								</div>
								<?php $price = number_format($sim->pkr_price); ?>
								<p class="price" style="">RS:&nbsp; <?php echo $price; ?></p>

							</figure>
						</a>
					</td>
	</tr>
@endforeach