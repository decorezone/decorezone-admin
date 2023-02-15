<?php
if($page->folder_name){
$dir_path = 'page/'.$page->folder_name;
$extensions_array = array('jpg','png','jpeg');
$var="";
$name="";
$featured_image_check=0;
$note="";
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
         <td> {{$name}} </td>
         <td><img src="{{ URL::asset($var) }}" class="attachment-img" width="100" height="140" alt="" style=""></td>
         <td>{{ URL::asset($var) }} 
         <td>
           
             <?php if($page->featured_image_1!=$files[$i]){ ?>

            <button type="submit" id="{{$name}}" class=" btn-mini btn btn-invert clickmefeatured">Make FEATURED</button>
              <?php }else{
                 $featured_image_check=1;
                 ?>
            <button type="submit" id="{{$name}}" class=" btn-mini btn btn-success remove_me_fetured">Removed FEATURED</button>
            <?php } ?>
         </td>
        
        <td> <button type="submit" id="{{$name}}" class=" btn-mini btn btn-danger clickme">Delete</button></td>
      </tr>
      <?php    

    }


  }
}
}
if($count_pics!=0){
if($featured_image_check==1){
  $note=$note."*=>FEATURED/Main Listing Image Exists &nbsp;&nbsp;&nbsp;<br>";
}else{
 $note=$note."*=>FEATURED/Main Listing Image Not Exists &nbsp;&nbsp;&nbsp;<br>";
}
echo "<tr><td colspan='6'><div class='alert alert-success'>$note</div></td></tr>";
}else{
  echo "<tr><td colspan='6'><div class='alert alert-success'>Add Some Pictures And Have Fan</div></td></tr>";
}
}
else{
  echo "<tr><td colspan='6'><div class='alert alert-success'><a class='btn btn-mini fix_page_pic_folder' id='fix_page_pic_folder' value=".$page->id."><i class='icon-star'></i> Fix Folder/Create Folder/By Clicking Me</a></a></div></td></tr>";
}
?>