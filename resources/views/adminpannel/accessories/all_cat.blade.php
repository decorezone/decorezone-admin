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
  



@include('adminpannel.accessories.partials.search_form')
@include('adminpannel.accessories.partials.accessory_div')

</section>

@endsection


@section('javabee')


<script type="text/javascript">
  jQuery(document).ready(function($){
   function formatResult(node) {
    var pointr="";
    if(node.level!=1){
     pointr="&nbsp;"+'↳'+"&nbsp;";
   }
   var $result = $('<span class="cat_list" style="padding-left:' + (20 * node.level) + 'px;">' + pointr +node.text + '</span>');
   return $result;
 };

 $(".level").select2({
  placeholder: 'Select an option',
  ajax: {
    url: '/admin/accessories_list',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
          return {
            text: item.text,
            id: item.id,
            level: item.level,
          }

        })
      };
    },
    cache: true
  },
  formatSelection: function(item) {
   
    return item.text
  },
  formatResult: function(item) {
   
    return item.text
  },
  templateResult: formatResult,
});
});
</script>
@endsection