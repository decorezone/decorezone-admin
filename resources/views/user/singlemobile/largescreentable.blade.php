<table id="prop" border="1">
	<tr>
		<th style="width:50%;" scope="col">
			<i class="fa  fa-desktop">

			</i><span class="prop_name">Display</span>
			
			<br><p class="prop_value">{{$mob->display_size}}</p>
		</th>
		<th style="width:50%;" scope="col">
			<i class="fa  fa-android">

			</i><span class="prop_name">OS</span>
			<br><p class="prop_value">{{$mob->os_type}}</p>
		</th>
	</tr>
	<tr>
		<th style="width:50%;" scope="col">
			<i class="fa  fa-database">

			</i><span class="prop_name">Storage</span>
			<br><p class="prop_value">{{$mob->rom_size}} {{$mob->rom_type}}</p>
		</th>
		
		<th style="width:50%;" scope="col">
			<i class="fa  fa-microchip">

			</i><span class="prop_name">RAM</span>
			<br><p class="prop_value"><?php if($mob->ram_size){ 
				echo $mob->ram_size."&nbsp;GB";
			} ?></p>
		</th>
	</tr>
	<tr>
		<th style="width:50%;" scope="col">
			<i class="fa  fa-camera">

			</i><span class="prop_name">Front Camera</span>
			<br><p class="prop_value">{{$mob->front_camera_details}}</p>
		</th>
		<th style="width:50%;" scope="col">
			<i class="fa  fa-camera">

			</i><span class="prop_name">Back Camera</span>
			<br><p class="prop_value">{{$mob->back_camera_details}}</p>
		</th>
	</tr>
	<tr>
		
		<th style="width:50%;" scope="col">
			<i class="fa  fa-cogs">

			</i><span class="prop_name">Performance</span>
			<br><p class="prop_value">{{ str_limit($mob->processor, $limit = 20, $end = '...') }},{{$mob->gpu}}</p>
		</th>
		<th style="width:50%;" scope="col">
			<i class="fa  fa-battery">

			</i><span class="prop_name">Battery Capacity</span>
			<br><p class="prop_value">{{$mob->battery_size}}</p>
		</th>
	</tr>
	<tr>
		<th class="borderclassth">
			<p class="brand_name_tab" >{{$mob->brand_name}}
			</p><br>
			<p>
				{{$mob->mobile_name}}
			</p>
		</th>
		<th class="borderclassth"><h2 class="p_heading">RS:&nbsp;{{number_format($mob->pkr_price)}}</h2></th>
	</tr>
	<tr>
		<th><a class="links_mobiles_div" href="{{url('mobile_pictures/'.$mob->mobile_url)}}">
			<i class="fa resize_icon fa-picture-o fa-lg"></i>&nbsp;Pictures
		</a>
	</th>
		<th><a class="links_mobiles_div" href="#comments_id">
			<i class="fa resize_icon fa-comments-o  fa-lg"></i>&nbsp; Comments & Reviews
		</a></th>

	</tr>

</table>


