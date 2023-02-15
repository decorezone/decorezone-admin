@extends('user.master')
<style type="text/css">
.comparison {
	max-width:940px;
	margin:0 auto;
	font:13px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
	text-align:center;
	padding:10px;
}

.comparison table {
	width:100%;
	border-collapse: collapse;
	border-spacing: 0;
	table-layout: fixed;
	border-bottom:1px solid #CCC;
}

.comparison td, .comparison th {
	border-right:1px solid #CCC;
	empty-cells: show;
	padding:10px;
	font-size: small;
}

.table_image img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	margin-top: 10px;
	margin-bottom: 10px;
}

/*.comparison tbody tr:nth-child(odd) {
	display:none;
}*/

.comparison .compare-row {
	background:#F5F5F5;
}

.comparison .tickblue {
	color:#0078C1;
}

.comparison .tickgreen {
	color:#009E2C;
}

.comparison th {
	font-weight:normal;
	padding:0;
	border-bottom:1px solid #CCC;
}

.comparison tr td:first-child {
	text-align:left;
}

.comparison .qbse, .comparison .qbo, .comparison .tl {
	color:#FFF;
	padding:10px;
	font-size:13px;
	border-right:1px solid #CCC;
	border-bottom:0;
}

.comparison .tl2 {
	border-right:0;
}



.comparison .qbo {
	background:#0e7d7d;
	border-top-left-radius: 3px;
	border-left:0px;
	padding: 20px;
	font-size: 20px;
	text-align: center;
}

.comparison .price-info {
	padding: 15px 15px 15px 15px;
	line-height: 5px;
}

.comparison .price-was {
	color:#999;
	text-decoration: line-through;
}
.price_compare{
	font-size: medium;
	font-weight: 600;
	color: orangered;
	text-align: center;
}
.compare_mobile_name{
	color: #454545;
	font-weight: 600;
	text-align: center;
	font-size: 12px;
}
.brand_name{
	color: dodgerblue;
	font-weight: 600;
	font-size: 12px;
	text-align: center;
	letter-spacing: 2px;

}

.comparison .price-now, .comparison .price-now span {
	color:#ff5406;
}

.comparison .price-now span {
	font-size:32px;
}

.comparison .price-small {
	font-size: 18px !important;
	position: relative;
	top: -11px;
	left: 2px;
}

.comparison .price-buy {
	background:#ff5406;
	padding:10px 20px;
	font-size:12px;
	display:inline-block;
	color:#FFF;
	text-decoration:none;
	border-radius:3px;
	text-transform:uppercase;
	margin:5px 0 10px 0;
}

.comparison .price-try {
	font-size:12px;
}

.comparison .price-try a {
	color:#202020;
}

@media (max-width: 767px) {
	.comparison td:first-child, .comparison th:first-child {
		display: none;
	}
	.comparison tbody tr:nth-child(odd) {
		display:table-row;
		background:#F7F7F7;
	}
	.comparison .row {
		background:#FFF;
	}
	.comparison td, .comparison th {
		border:1px solid #CCC;
	}
	.price-info {
		border-top:0 !important;

	}

}

@media (max-width: 639px) {
	.comparison .price-buy {
		padding:5px 10px;
	}
	.comparison td, .comparison th {
		padding:10px 5px;
	}
	.comparison .hide-mobile {
		display:none;
	}
	.comparison .price-now span {
		font-size:16px;
	}

	.comparison .price-small {
		font-size: 16px !important;
		top: 0;
		left: 0;
	}
	.comparison .qbse, .comparison .qbo {
		font-size:12px;
		padding:10px 5px;
	}
	.comparison .price-buy {
		margin-top:10px;
	}
	.compare-heading {
		font-size:13px;
	}
}
.second_column{
	background-color: linen !important;
	font-weight: 600 !important;
	text-align: center !important;
	font-size: 12px !important;
}
.first{

	    font-size: 15px !important;
    background: rgba(0, 123, 255, 0.15);
    color: darkslategrey;
}
</style>
@section('userdash')
<div class="container"  id="main_container">
	<div class="row">
		<div class="col-lg-2" id="a" style="margin-top:5px;">
			<div class="">
				<img src="{{ URL::asset('user/Capture.PNG') }}" style="float:right;" alt="" class="hide_me_on_mobile">
			</div>
		</div>
		<div class="col-lg-8">

			<div class="comparison">

				<table>
					<thead>
						<tr>
							<th class="tl tl2"></th>

							<th colspan="4" class="qbo">
								Small businesses that need accounting, invoicing or payroll
							</th>
						</tr>
						<tr>
							<th class="tl"></th>
							<th class="table_image">
								<img src="http://localhost:8000/mobile_pics/1565158304/main_image_oppok3.jpg" alt="main_image_oppok3.jpg" class="img_responsive" style="height: 100px;width: 45px;">
							</th>
							<th class="table_image">
								<img src="http://localhost:8000/mobile_pics/1565158304/main_image_oppok3.jpg" alt="main_image_oppok3.jpg" class="img_responsive" style="height: 100px;width: 45px;">
							</th>
							<th class="table_image">
								<img src="http://localhost:8000/mobile_pics/1565158304/main_image_oppok3.jpg" alt="main_image_oppok3.jpg" class="img_responsive" style="height: 100px;width: 45px;">
							</th>
							<th class="table_image">
								<img src="http://localhost:8000/mobile_pics/1565158304/main_image_oppok3.jpg" alt="main_image_oppok3.jpg" class="img_responsive" style="height: 100px;width: 45px;">
							</th>
						</tr>
						<tr>
							<th></th>
							<th class="price-info">
								<p class="brand_name">OPPO</p>
								<p class="compare_mobile_name">F11 Pro</p>
								<p class="price_compare" style="">RS:&nbsp; 45,999</p>
							</th>
							<th class="price-info">
								<p class="brand_name">OPPO</p>
								<p class="compare_mobile_name">F11 Pro</p>
								<p class="price_compare" style="">RS:&nbsp; 45,999</p>
							</th>
							<th class="price-info">
								<p class="brand_name">OPPO</p>
								<p class="compare_mobile_name">F11 Pro</p>
								<p class="price_compare" style="">RS:&nbsp; 45,999</p>
							</th>
							<th class="price-info">
								<p class="brand_name">OPPO</p>
								<p class="compare_mobile_name">F11 Pro</p>
								<p class="price_compare" style="">RS:&nbsp; 45,999</p>
							</th>

						</tr>
					</thead>
					<tbody>
						
						<tr class="compare-row">
							<td colspan="5" class="first"><i class="fa  fa-bars"></i>&nbsp;&nbsp;Basic Information</td>

						</tr>
						<tr class="compare-row">
							<td class="second_column">Basic</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Series</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Brand</td>
							<td>IPHONE</td>
							<td>SAMSUNG</td>
							<td>OPPO</td>
							<td>SONY</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Announced</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
						</tr>

						<tr class="compare-row">
							<td colspan="5" class="first"><i class="fa  fa-cogs"></i>&nbsp;&nbsp;Build Information</td>

						</tr>
						<tr class="compare-row">
							<td class="second_column">Basic</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Series</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Brand</td>
							<td>IPHONE</td>
							<td>SAMSUNG</td>
							<td>OPPO</td>
							<td>SONY</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Announced</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
						</tr>
						<tr class="compare-row">
							<td colspan="5" class="first"><i class="fa fa-spinner"></i>&nbsp;&nbsp;Frequency</td>

						</tr>
						<tr class="compare-row">
							<td class="second_column">Basic</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Series</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
							<td>Apple Iphone</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Brand</td>
							<td>IPHONE</td>
							<td>SAMSUNG</td>
							<td>OPPO</td>
							<td>SONY</td>
						</tr>
						<tr class="compare-row">
							<td class="second_column">Announced</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
							<td>A2097, A1920, A2100, A2098</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
		<div class="col-lg-2" id="a" style="margin-top:5px;">
			<div class="">
				<img src="{{ URL::asset('user/Capture.PNG') }}" style="float:right;" alt="" class="hide_me_on_mobile">
			</div>
		</div>
	</div>
	@endsection