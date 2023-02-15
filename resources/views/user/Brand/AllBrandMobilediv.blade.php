<h2 class="price_bar">{{$brand->brand_name}} Mobile Price > 100K
</h2>

<div class="container_mob">

		@foreach($mobiles as $mob)
		<div class="mobitem">
			@include('user.chunks.mobile_table_div')
		</div>
		@endforeach
</div>