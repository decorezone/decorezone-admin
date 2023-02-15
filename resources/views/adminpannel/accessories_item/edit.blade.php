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
</style>
@section('adminpagedash')
<section class="content">
  @include('adminpannel.accessories_item.partials.edit_items')
</section>
@endsection
@section('javabee')
@include('adminpannel.accessories.partials.select_2_edit')
@endsection