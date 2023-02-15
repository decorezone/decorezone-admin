
	<div class="inner br-left-mobi-card mobi-card">
		<a href="{{url($mob->mobile_url)}}-price-in-pakistan">
			<div class="col-md-12 text-center">

				<?php
                    $image_path='mobile_pics/'.$mob->pic_folder.'/'.$mob->main_pic;
				 if(file_exists($image_path)){
                   
				 }else{
				 	 $image_path='user/mobile_pic_not_found.png';
				 }

				  ?>
				<img src="{{ URL::asset($image_path) }}" alt="{{$mob->brand_name}} {{$mob->mobile_name}} price in Paksitan" title="{{$mob->brand_name}} {{$mob->mobile_name}} mobile price in Paksitan"class="ProductTopCell img-rounded">
			</div>
			<div class="col-md-12 text-center">														
				<p class="mb-0">{{$mob->brand_name}}</p>
				<p class="black-text-top mt-5-negative text-center mb-0">  {{ str_limit($mob->mobile_name, $limit = 20, $end = '...') }}</p>
				<p class="red-text text-center mt-5-negative mb-0">RS:&nbsp; <?php $price = number_format($mob->pkr_price); ?><?php echo $price; ?></p>
			</div>
			
		</a>
	</div>
  
