<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">
		<tr>
			<th class="fist_tr" colspan="2">General</th>
		</tr>
		<tr>
			<td>Mobile</td>
			<td>{{$mob->mobile_name}}</td>
		</tr>

		<tr>
			<td>Model</td>
			<td>{{$mob->model}}</td>
		</tr>
		<tr>
			<td>Series</td>
			<td>{{$mob->series}}</td>
		</tr>
		<tr>
			<td>Announced</td>
			<td>{{$mob->announced}}</td>
		</tr>
		<tr>
			<td>Build/Body</td>
			<td>{{$mob->body_build}}</td>
		</tr>


	</table>


</div>
<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">
		<tr>
			<th class="fist_tr" colspan="2">Specification</th>
		</tr>
		<tr>
			<td>RAM</td>
			<td><?php if($mob->ram_size){ 
				echo $mob->ram_size."&nbsp;GB";
			} ?>&nbsp;&nbsp;{{$mob->ram_description}}</td>
		</tr>
		<tr>
			<td>Storage</td>
			<td>{{$mob->rom_size}}&nbsp;{{$mob->rom_type}}&nbsp;{{$mob->rom_description}}</td>
		</tr>

		<tr>
			<td>OS</td>
			<td>{{$mob->os_type}} {{$mob->os_type_description}}</td>
		</tr>
		<tr>
			<td>Processor</td>
			<td>{{$mob->processor}} {{$mob->processor_details}}</td>
		</tr>
		
		<tr>
			<td>GPU</td>
			<td>{{$mob->gpu}} &nbsp;{{$mob->gpu_details}}</td>
		</tr>

		<tr>
			<td>Display</td>
			<td>{{$mob->display_size}} Inch &nbsp;{{$mob->display_description}}</td>
		</tr>


	</table>


</div>
<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">
		<tr>
			<th class="fist_tr" colspan="2">Front Camera / Selfie Camera</th>
		</tr>

		<tr>
			<td>Details</td>
			<td>{{$mob->front_camera_details}}</td>
		</tr>
	



	</table>


</div>
<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">
		<tr>
			<th class="fist_tr" colspan="2">Back Camera / Rear Camera </th>
		</tr>
		<tr>
			<td>Count</td>
			<td>{{$mob->back_camera_count}}</td>
		</tr>
		<tr>
			<td>Features</td>
			<td>{{$mob->back_camera_details}}</td>
		</tr>



	</table>


</div>
<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">
		<tr>
			<th class="fist_tr" colspan="2">Battery info</th>
		</tr>

		<tr>
			<td>Capicity</td>
			<td>{{$mob->battery_size}}</td>
		</tr>
		<tr>
			<td>Fast Charging</td>
			<td>
				<?php
                   
                   if($mob->fast_charging_check==1){
                   	echo "YES";
                   }else{
                   	echo "NO";
                   }

				 ?> &nbsp;
				{{$mob->fast_charging_details}}</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>{{$mob->battery_description}}</td>
		</tr>
	</table>


</div>

<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">

		<tr>
			<th class="fist_tr" colspan="2">Features</th>
		</tr>
		
		@foreach (json_decode($mob->other_checks) as $member)
		<tr>
         <td>
         	{{ $member }}
		</td> 

		<td>YES</td>
	    </tr>
         @endforeach
	</table>


</div>
<div class="col-md-12">
	<table class="table destable "style="margin-top: -5px;">
		

		<tr>
			<td>Extra Details</td>
			<td>{{$mob->mobile_short_intro}}</td>
		</tr>
		

	</table>


</div>



