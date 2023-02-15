@extends('adminpannel.master')

<style type="text/css">
body{
  font-family: Verdana,sans-serif !important;
}
label {
  font-weight: 100 !important;
}
input, select, textarea {
  font-weight: 100 !important;
}
.cat_list{
  font-weight: 100 !important;
}
.box.box-solid.box-primary {
  border: 1px solid #3c8dbc;
    background: none;
}
.table b{
	float: right !important;
}
.order_ul li{

	margin-top: 5px;
}

.table {
  border-collapse: collapse;
}

.table, th, td  {
  border: 1px solid black;
}
tr th{
	border:1px solid black;
}
td img{
	width: 150px;
	height: 150px;
}
.black_label{
	    background-color: #000000 !important;

}
</style>
@section('adminpagedash')
<section class="content">
	
	@include('adminpannel.accessories_item.partials.search_item_list')

	@include('adminpannel.accessories_item.partials.item_list')


</section>
@endsection
@section('javabee')
@endsection