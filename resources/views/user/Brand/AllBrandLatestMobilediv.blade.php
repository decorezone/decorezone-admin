
<div class="container_mob">

		@foreach($latest_mobile as $mob)
		<div class="mobitem">
			@include('user.chunks.mobile_table_div')
		</div>
		@endforeach
</div>