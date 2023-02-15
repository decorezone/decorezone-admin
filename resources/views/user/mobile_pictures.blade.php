@extends('user.master')
@section('seo')
<?php
$mobile_name=$mob->brand_name.' '.$mob->mobile_name;
 $title_string='mbkr#3302 Pictures, Official Photos - MobileinPakistan';
$title = str_replace('mbkr#3302', $mobile_name, $title_string);
$description='mbkr#3302 Pictures, updated mbkr#3302 phone Images including specs And information : MobileinPakistan : mbkr#3302 Photos Pakistan';
$description = str_replace('mbkr#3302', $mobile_name, $description);
$keyword='mbkr#3302, mbkr#3302 photos, mobile_name, mbkr#3302 Pictures, mbkr#3302 Images, mbkr#3302 Image Gallery, mbkr#3302 Official Photos, mbkr#3302 Design, mbkr#3302 Best Image Gallery';
$keyword = str_replace('mbkr#3302', $mobile_name, $keyword);
$keyword = str_replace('mobile_name', $mob->mobile_name, $keyword);
?>
<title>{{$title}}</title>
<meta name="description" content="{{$description}}">
<meta name="keywords" content="{{$keyword}}">
@endsection
@section('pagecss')                   
<style type="text/css">
 body{
 	background-color: ghostwhite;
 }
#newspaper-c td{
	    font-size: small;
	    text-align: center;
	    padding: 20px;
}

#newspaper-c td img{
	display: block;
     width: 50%;
     height: 420px;
    margin: auto;
}
.mobile_info_pic{
display: contents;
}
.mobile_info_pic_row{
	background: #197e1d;
    margin: 0px;
    font-size: 22px;
    color: white;
    font-weight: 400;
}
.mobile_info_pic_row h1{
	color: white;
    font-size: 22px;
    font-weight: 300;
    margin-top: 3px;
}
.mobile_info_pic_row a{
	color: white;
    font-size: 22px;
    text-decoration: none;
}
.mobile_info_pic_row a:hover{
	
    text-decoration: none;
}
@media  only screen and (max-width : 768px) {
	#newspaper-c td img{
	display: block;
     width: 50%;
     height: 250px;
    margin: auto;
}
	}

	#b{
     margin-top: -5px;
    width: 100%;
    margin-bottom: 20px;
	}

</style>
@endsection
@section('userdash')
<div class="container"  id="main_container">
	<div class="row" style="margin-top: 5px;">
		<div class="col-lg-2" id="a" style="margin-top:5px;">
			<div class="">
				<img src="{{ URL::asset('user/Capture.PNG') }}" style="float:right;" alt="" class="hide_me_on_mobile">
			</div>
		</div>
		<div class="col-lg-7"  id="b">
			<div class="row mobile_info_pic_row">
				<div class="col-md-12 mobile_info_pic">
					<div class="col-md-1">
						<a  href="{{ url()->previous() }}" >&#x2190;</a>
					</div>
					<div class="col-md-7">
					<h1>{{$mob->brand_name}} {{$mob->mobile_name}}</h1>
					</div>
					<div class="col-md-4">
						<span>Rs. {{number_format($mob->pkr_price)}}</span>
					</div>
					
				</div>
				
			</div>
				
			
			
			<div class="col-md-12" style="padding: 0px;">
				
				<table id="newspaper-c" border="1">
					

					<tr>
						<th style="width: 50%" scope="col"></th>
						<th style="width: 50%" scope="col"></th>

					</tr>
					<?php
				$dir_path = 'mobile_pics/'.$mob->pic_folder;
				$extensions_array = array('jpg','png','jpeg');
				$var="";
				$checked=0;
				if(is_dir($dir_path))
				{
					$files = scandir($dir_path);

					for($i = 0; $i < count($files); $i++)
					{
						if($files[$i] !='.' && $files[$i] !='..')
						{
                       
                          if($files[$i]!=$mob->main_pic){
							$file = pathinfo($files[$i]);
							$extension = $file['extension'];

							if(in_array($extension, $extensions_array))
							{
            // show image
								$var=$dir_path.'/'.$files[$i];
								

                                 $checked++;
								?>
								  
									<td>
										<img src="{{ URL::asset($var) }}" />
									</td>
								

								
								<?php

                                 if($checked==2){ echo "</tr><tr>"; $checked=0; }
							
						}
					}

						}

					}
				}
				?>
				<tr>
				</table>
			</div>
		</div>
		<div class="col-lg-3"  id="c">
			@include('user.chunks.side_bar_search')
		</div>
	</div>
</div>
@endsection
@section('jsfiles')
<script type="text/javascript">
	comparison_data();
	function comparison_data(){
		$.ajax({
			url: "{{url('comparison_data')}}",
			type: "get",
			success: function( data ) {
				$('#tblEntAttributes tbody').append(data);
			}
		});
	}
</script>
@endsection