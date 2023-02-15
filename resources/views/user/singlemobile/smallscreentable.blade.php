<table id="propxs" border="1">
	<tr>
		<th  scope="col">
			<i class="fa fa-desktop">

			</i><span class="prop_name">Display</span>
			<br><p class="prop_value">{{$mob->display_size}}</p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa fa-android">

			</i><span class="prop_name">OS</span>
			<br><p class="prop_value">{{$mob->os_type}}</p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa fa-cogs">

			</i><span class="prop_name">Performance</span>
			<br><p class="prop_value">{{ str_limit($mob->processor, $limit = 20, $end = '...') }},{{$mob->gpu}}</p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa  fa-camera ">

			</i><span class="prop_name">Front Camera</span>
			<br><p class="prop_value">{{$mob->front_camera_details}}</p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa  fa-camera ">

			</i><span class="prop_name">Back Camera</span>
			<br><p class="prop_value">{{$mob->back_camera_details}}</p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa fa-microchip">

			</i><span class="prop_name">RAM</span>
			<br><p class="prop_value"><?php if($mob->ram_size){ 
										echo $mob->ram_size."&nbsp;GB";
									} ?></p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa fa-database">

			</i><span class="prop_name">Storage</span>
			<br><p class="prop_value">{{$mob->rom_size}} {{$mob->rom_type}}</p>
		</th>
	</tr>
	<tr>
		<th  scope="col">
			<i class="fa fa-battery">

			</i><span class="prop_name">Battery Capacity</span>
			<br><p class="prop_value">{{$mob->battery_size}}</p>
		</th>
	</tr>
	

</table>