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
</style>
@section('adminpagedash')
<section class="content">
  <div class="row">
   <div class="col-md-4 col-sm-6 col-xs-12">
    <a href="#accessory_type">
      <div class="info-box bg-gray">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Accessory Type</span>
          <span class="info-box-number">{{$accessory_type->count()}}</span>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Accessory Sub Type</span>
        <span class="info-box-number">{{$accessory_type_sub}}</span>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Accessory Item</span>
        <span class="info-box-number">{{$accessory_item->count()}}</span>
      </div>
    </div>
  </div>
  
</div>



@include('adminpannel.accessories.partials.accessory_add_form')
@include('adminpannel.accessories.partials.accessory_div')

</section>

@endsection


@section('javabee')

@include('adminpannel.accessories.partials.select_2')

@endsection