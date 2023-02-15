<div class="col-md-12">
      <div class="row" style="margin-bottom: 20px;">
        <ul id="services-list">
          <h6 class="searchbar_head searchbar-left">Top 10 Mobile</h6>
          @foreach($top_ten_mobile as $top)
          <li>
            <a href="{{url($top->mobile_url)}}-price-in-pakistan" class="image">
              <img src="{{ URL::asset('mobile_pics/'.$top->pic_folder.'/'.$top->main_pic) }}" alt="{{$top->brand_name}} {{$top->mobile_name}} price in Paksitan" title="{{$top->brand_name}} {{$top->mobile_name}} mobile price in Paksitan" >
            </a>
            <div class="content">
              <h6>{{$top->brand_name}}</h6>
              <p class="top_mobile_name">{{$top->mobile_name}}</p>
              <?php $price = number_format($top->pkr_price); ?>
              <p class="top_price">RS:&nbsp; <?php echo $price; ?></p>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      
    </div>
   
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Left bar Website -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2125131486824957"
     data-ad-slot="5477284667"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>