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
   placeholder: {
    id: $('#category_id').val(), // the value of the option
    text: $('#category_id_text').val()
  },
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