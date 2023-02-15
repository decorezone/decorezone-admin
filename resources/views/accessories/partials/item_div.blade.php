<div class="mobitem">
	<div class="inner br-left-mobi-card mobi-card">
		<a href="{{url('/accessories/'.$item->item_url)}}-price-in-pakistan">
			<div class="col-md-12 pd-o">
				<img src="{{ URL::asset('accessory_item/'.$item->item_pic_folder.'/'.$item->item_pic) }}" alt="Huawei Mate 20 price in Paksitan" title="Huawei Mate 20 mobile price in Paksitan" class="ProductTopCell img-rounded">
			</div>
			<div class="col-md-12 text-center">														
				<p class="mb-0">{{$item->item_url}}</p>
				<p class="black-text-top mt-5-negative text-center mb-0">{{$item->brands->brand_name}}</p>
				<p class="black-text-top mt-5-negative text-center mb-0"> {{$item->accessory_type->accessory_type_name}}</p>
				<p class="red-text text-center mt-5-negative mb-0">RS:&nbsp; {{$item->pkr_price}}</p>

			</div>
		
			<div class="col-md-12">
				<div class="btn-group" style="margin:5px 0 10px 0;">
					<button type="button" title="Huawei Mate 20 mobile price in Paksitan" class="btn btn-xs btn_item_view btn_width"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Huawei Mate 20 mobile price in Paksitan" class="btn btn-xs btn_item_view btn_width"><i class="fa fa-cart-plus  fa-lg" aria-hidden="true"></i></button>
				</div>
			</div>

		</a>
	</div>

</div>