

<input type="hidden" id="accessory_item_id" value="{{$accessory_item->id}}">
<?php
$dir_path = 'accessory_item/'.$accessory_item->item_pic_folder;
$extensions_array = array('jpg','png','jpeg');
$var="";
$name="";
$count_pics=0;
if(is_dir($dir_path))
{
  $files = scandir($dir_path);
  for($i = 0; $i < count($files); $i++)
  {
    if($files[$i] !='.' && $files[$i] !='..')
    {
      $file = pathinfo($files[$i]);
      $extension = $file['extension'];
      if(in_array($extension, $extensions_array))
      {
       $count_pics++;

       $var=$dir_path.'/'.$files[$i];
       $name=$files[$i];
       ?>
       <tr>
       <td>
        <img src="{{ URL::asset($var) }}" width="400px" height="250" alt="" style="">
      </td>
        <td>
          <ul style="padding: 100px;">
          <li style="" id="{{$name}}" class=" clickme">
            <span class="btn btn-danger  btn-xs">Remove this Image</span></li>
            <br>
          <?php if($accessory_item->item_pic!=$files[$i]){ ?>
            <li style="" id="{{$name}}" class=" clickmefeatured">  <span class=" btn-xs btn btn-primary">MAKE FEATURED</span></li>
          <?php }else{?>
           
            <li style="" id="{{$name}}" class="clickme">  <span class=" btn-xs btn btn-danger">Remove Featured Image</span></li>
          <?php } ?>
          </ul>
        </td>
      </tr>
      <?php    

    }

  }
}
}
?>