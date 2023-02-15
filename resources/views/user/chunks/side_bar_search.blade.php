<table class="table searchbar">
  <tr class="search_bar_right_tr">
    <th colspan="15" class="searchbar_head" >Select Any Brand</th>
  </tr>
  <?php $check=0; ?>
  
  @foreach($brands as $brand)
    <?php
         if($check==0){
          echo "<tr class='search_bar_right_tr'>";
         }
     ?>
 
    <td><a href="{{url($brand->brand_name)}}-mobiles-price-in-pakistan">{{$brand->brand_name}}</a>
    </td>

    <?php $check++; ?>
    <?php
         if($check==3){
          echo "</tr>";
           $check=0;
         }
     ?>
  
  @endforeach
   <?php
         if($check<3){
          echo "</tr>";
         }
     ?>
</table>

  <table class="table  searchbar">
                  <tr class="search_bar_right_tr">

    <th colspan="15" class="searchbar_head">Search By Price
    </th> 
  </tr>
  <tr class="search_bar_right_tr">
 
    <td class="pricefilter" colspan="2" style="text-align: center;"><a href="{{url('Mobile-Price-100000-to-500000')}}">Price > 100K</a></td>
  </tr>
  <tr class="search_bar_right_tr">
   <td col  class="pricefilter"><a href="{{url('Mobile-Price-80000-to-99000')}}">80,000&nbsp;-&nbsp;99,000</a> </td>
   <td class="pricefilter"><a href="{{url('Mobile-Price-70000-to-80000')}}">70,000&nbsp;-&nbsp;80,000</a> </td>
   
 </tr>
  <tr class="search_bar_right_tr">
   <td class="pricefilter"><a href="{{url('Mobile-Price-60000-to-70000')}}"> 60,000&nbsp;-&nbsp;70,000</a></td>
   <td class="pricefilter"><a href="{{url('Mobile-Price-50000-to-60000')}}">50,000&nbsp;-&nbsp;60,000</a> </td>
   
 </tr>
 <tr class="search_bar_right_tr">
   <td class="pricefilter"><a href="{{url('Mobile-Price-40000-to-50000')}}"> 40,000&nbsp;-&nbsp;50,000</a></td>
   <td class="pricefilter"><a href="{{url('Mobile-Price-30000-to-40000')}}">30,000&nbsp;-&nbsp;40,000</a> </td>
   
 </tr>
 <tr class="search_bar_right_tr">
   <td class="pricefilter"><a href="{{url('Mobile-Price-20000-to-30000')}}"> 20,000&nbsp;-&nbsp;30,000</a></td>
   <td class="pricefilter"><a href="{{url('Mobile-Price-10000-to-20000')}}">10,000&nbsp;-&nbsp;20,000</a> </td>
  
 </tr>
 <tr class="search_bar_right_tr">
  <td class="pricefilter" colspan="2" style="text-align: center;"><a href="{{url('Mobile-Price-0-to-10000')}}">Price < 10,000</a> </td>
</tr>
</table>
<table class="table  searchbar">

<tr class="search_bar_right">
  <th colspan="15" class="searchbar_head" >Search By Storage</th> 
</tr>
<tr class="search_bar_right_tr">
  <td><a href="{{url('1TB-Memory-Mobile-Phones')}}">1TB</a></td>
   <td><a href="{{url('512GB-Memory-Mobile-Phones')}}">512 GB</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('256GB-Memory-Mobile-Phones')}}">256 GB</a></td>
 <td><a href="{{url('128GB-Memory-Mobile-Phones')}}">128 GB</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('64GB-Memory-Mobile-Phones')}}">64 GB</a></td>
 <td><a href="{{url('32GB-Memory-Mobile-Phones')}}">32 GB</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('16GB-Memory-Mobile-Phones')}}">16 GB</a></td>
 <td><a href="{{url('8GB-Memory-Mobile-Phones')}}">8GB</a></td>
</tr>
<tr class="search_bar_right_tr">
  <td colspan="2" style="text-align: center;"><a href="{{url('less-then-8GB-Memory-Mobile-Phones')}}">Less Then 8 GB</a></td>
</tr>
</table>
<table class="table  searchbar">
<tr class="search_bar_right">
  <th colspan="15" class="searchbar_head" >Search By RAM</th> 
</tr>

<tr class="search_bar_right_tr">
  <td colspan="2" style="text-align: center;"><a href="{{url('12GB-RAM-Mobile-Phones')}}">RAM 12GB or more</a></td>
</tr>
<tr class="search_bar_right_tr">
  <td><a href="{{url('8GB-RAM-Mobile-Phones')}}">8GB</a></td>
  <td><a href="{{url('6GB-RAM-Mobile-Phones')}}">6GB</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('4GB-RAM-Mobile-Phones')}}">4GB</a></td>
 <td><a href="{{url('3GB-RAM-Mobile-Phones')}}">3GB</a></td>
</tr>
<tr class="search_bar_right_tr">
  <td colspan="3" style="text-align: center;"><a href="{{url('1GB-RAM-to-2GB-RAM-Mobile-Phones')}}">1GB - 2GB</a></td>
</tr>
</table>
<table class="table  searchbar">
<tr class="search_bar_right">
  <th colspan="15" class="searchbar_head" >Search By Camera</th>
</tr>

<tr class="search_bar_right_tr">
  <td colspan="2" style="text-align: center;"><a href="{{url('64MP-Camera-Mobile-Phones')}}">64MP or more</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('48MP-Camera-Mobile-Phones')}}">48 Megapixel</a></td>
 <td><a href="{{url('32MP-Camera-Mobile-Phones')}}">32 Megapixel</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('24MP-Camera-Mobile-Phones')}}">24 Megapixel</a></td>
 <td><a href="{{url('20MP-Camera-Mobile-Phones')}}">20 Megapixel</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('16MP-Camera-Mobile-Phones')}}">16 Megapixel</a></td>
 <td><a href="{{url('13MP-Camera-Mobile-Phones')}}">13 Megapixel</a></td>
</tr>
<tr class="search_bar_right_tr">
  <td><a href="{{url('8MP-Camera-Mobile-Phones')}}">8 Megapixel</a></td>
  <td><a href="{{url('5MP-Camera-Mobile-Phones')}}">5 Megapixel</a></td>
</tr>
<tr class="search_bar_right_tr">
 <td><a href="{{url('Quad-Camera-Mobile-Phones')}}" title="Mobile Phone with 4 Camera back">4&nbsp;or&nbsp;Quad</a></td>
 <td><a href="{{url('Triple-Camera-Mobile-phone')}}">3&nbsp;or&nbsp;Triple</a></td>
</tr>
<tr class="search_bar_right_tr">
   <td><a href="{{url('Dual-Camera-Mobile-Phones')}}">2&nbsp;or&nbsp;Dual</a></td>
   <td><a href="{{url('VGA-Camera-Mobile-Phones')}}"> VGA Camera</a></td>

</tr>
<tr class="search_bar_right_tr">
   <td colspan="2" width="100"><a href="{{url('Mobile-Phones-Without-Camera')}}">Without Camera</a></td>
</tr>
</table>
<!-- <table class="table  searchbar">
<tr class="search_bar_right">
  <th colspan="15" class="searchbar_head" >Search By Screen Size
</th>
</tr>
<tr class="search_bar_right_tr">
  <td width="50">Screen Size > 7.0</td>
  <td width="50">6.0--6.9 Inch</td>
</tr>
<tr class="search_bar_right_tr"> 
  <td width="50">5.0--5.9 Inch</td>
  <td width="50">4.1--4.9 Inch</td>
</tr>
<tr class="search_bar_right_tr">
  <td width="50">Classic Screen</td>
  <td width="50">Tablets Size</td>
  </tr>
  <tr class="search_bar_right_tr">
  <td colspan="2">Watch Size</td>
</tr>
</table> --><!-- 
<table class="table  searchbar">
<tr class="search_bar_right">
  <th colspan="15" class="searchbar_head">Search By OS</th>
</tr>

<tr class="search_bar_right_tr">
  <td colspan="2">Window Mobile</td>
</tr>
<tr class="search_bar_right_tr">
  <td width="50">Android</td>
  <td width="50">IOS</td>
</tr>

</table> -->

 



