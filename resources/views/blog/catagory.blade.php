@extends('blog.masterblog')
@section('seo')
<title>{{$catagory_info->cat_title}}</title>
<meta name="description" content="{{$catagory_info->cat_short}}">
<meta name="keywords" content="{{$catagory_info->cat_meta}}">
@endsection
@section('blogdash') 
<div class="latest_newsarea"> <span>Top 10 Mobiles</span>
  <ul id="ticker01" class="news_sticker">
    @foreach($top_ten_mobile as $top)
    <li>
      <a href="{{url($top->mobile_url)}}-price-in-pakistan" class="image">
        {{$top->brand_name}}&nbsp; {{$top->mobile_name}}&nbsp;  ( PKR: {{number_format($top->pkr_price)}} )
      </a>
    </li>       
    @endforeach
  </ul>
</div>
<section id="contentbody">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
      <div class="row">
        <div class="left_bar">
          <div class="single_leftbar">
            <h2><span>Recent Post</span></h2>
            <div class="singleleft_inner">
              <ul class="recentpost_nav wow fadeInDown">
                @foreach($recent_post as $post)
                <li><a href="{{url('blog/'.$post->post_url)}}"><img src="{{ URL::asset('post/'.$post->post_folder.'/'.$post->post_featured_image) }}" alt=""></a> <a class="recent_title" href="{{url('blog/'.$post->post_url)}}">{{$post->post_name}}</a></li>
                @endforeach

              </ul>
            </div>
          </div>
          <div class="single_leftbar wow fadeInDown">
            <h2><span>Side Add</span></h2>
            <div class="singleleft_inner"> <a href="#"><img src="{{ URL::asset('userblog/images/150x600.jpg') }}" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
      <div class="row">
        <div class="middle_bar">
            <div class="single_category wow fadeInDown">

              <div class="category_title">
               
                <a href="{{url('catagories/'.$catagory_info->cat_url)}}">{{$catagory_info->cat_name}}</a>
               
              </div>
              <div class="single_category_inner">
                <ul class="catg_nav">
                 @foreach($blog_post as $cat_post)
                 <li>
                  <div class="catgimg_container"> <a class="catg1_img" href="{{url('blog/'.$cat_post->post_url)}}"> <img src="{{ URL::asset('post/'.$cat_post->post_folder.'/'.$cat_post->post_featured_image) }}" alt=""> </a></div>
                  <a class="catg_title" href="{{url('blog/'.$cat_post->post_url)}}">{{$cat_post->post_name}}</a>
                  <div class="sing_commentbox">
                    <p><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($cat_post->created_at)->format('d F Y')}}</p>
                    <a href="{{url('blog/'.$cat_post->post_url)}}"><i class="fa fa-comments"></i>20 Comments</a></div>
                  </li>
                  @endforeach

                </ul>
              </div>
            </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="row">
                <div class="right_bar">
                  <div class="single_leftbar wow fadeInDown">
                    <h2><span>Social Media</span></h2>
                    <div class="singleleft_inner">
                      <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmobileinpakistan%2F&width=400&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width="100%" height="20%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                  </div>
                  <div class="single_leftbar wow fadeInDown">
                    <h2><span>Catagories</span></h2>
                    <div class="singleleft_inner">
                      <ul class="label_nav">
                        @foreach($cat_name as $cat)
                        <li><a href="{{url('catagories/'.$cat->cat_url)}}">{{$cat->cat_name}}</a></li>
                        @endforeach

                      </ul>
                    </div>
                  </div>
                  <div class="single_leftbar wow fadeInDown">
                    <h2><span>Latest Mobile</span></h2>
                    <div class="singleleft_inner">
                      <ul class="catg3_snav ppost_nav wow fadeInDown">
                        @foreach($latest_mobile as $mob)
                        <li>
                          <div class="media">
                           <a href="{{url($mob->mobile_url)}}-price-in-pakistan" class="media-left"> 
                            <img src="{{ URL::asset('mobile_pics/'.$mob->pic_folder.'/'.$mob->main_pic) }}" alt="{{$mob->brand_name}} {{$mob->mobile_name}} price in Paksitan" title="{{$mob->brand_name}} {{$mob->mobile_name}} mobile price in Paksitan">
                          </a>
                          <div class="media-body"> <a href="{{url($mob->mobile_url)}}-price-in-pakistan" class="cat3_title">{{$mob->mobile_name}}<br>{{$mob->brand_name}}<br><?php $price = number_format($mob->pkr_price); ?>
                          <p class="price" style="">RS:&nbsp; <?php echo $price; ?></p></a></div>
                        </div>
                      </li>
                      @endforeach

                    </ul>
                  </div>
                </div>
                <div class="single_leftbar wow fadeInDown">
                  <h2><span>Side Ad</span></h2>
                  <div class="singleleft_inner"> <a href=""><img alt="" src="{{ URL::asset('userblog/images/262x218.jpg') }}"></a></div>
                </div>


                
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection