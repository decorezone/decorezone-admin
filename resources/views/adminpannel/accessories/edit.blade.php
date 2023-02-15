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
</style>
@section('adminpagedash')
<section class="content">
 @include('adminpannel.accessories.partials.accessory_edit_form')
</section>
@endsection
@section('javabee')

@include('adminpannel.accessories.partials.select_2_edit')


@endsection