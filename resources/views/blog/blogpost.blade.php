@extends('blog.masterblog')
@section('seo')
<title>{{$blog_post->post_titile}}</title>
<meta name="description" content="{{$blog_post->post_short}}">
<meta name="keywords" content="{{$blog_post->post_meta}}">
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
        	<div class="single_post_area">
                <ol class="breadcrumb">
                  <li><a href="{{url('/blog')}}"><i class="fa fa-home"></i>Blog<i class="fa fa-angle-right"></i></a></li>
                  <li><a href="{{url('catagories/'.$blog_post->cat_url)}}">{{$blog_post->cat_name}}<i class="fa fa-angle-right"></i></a></li>
                  <li class="active">{{$blog_post->post_name}}</li>
                </ol>
                <h2 class="post_title wow ">{{$blog_post->post_name}}</h2>
                <a href="#" class="author_name"><i class="fa fa-user"></i>Admin</a> <a href="{{url('/blog')}}" class="post_date"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($blog_post->created_at)->format('d F Y')}}</a>
                <img class="img-center" src="{{ URL::asset('post/'.$blog_post->post_folder.'/'.$blog_post->post_featured_image) }}" alt="">
                <div class="single_post_content">
                  <p> <?php echo htmlspecialchars_decode($blog_post->post_p_one);
                    ?></p>
                  <img class="img-center" src="{{ URL::asset('post/'.$blog_post->post_folder.'/'.$blog_post->post_p_one_img) }}" alt="">
                  <p><?php echo htmlspecialchars_decode($blog_post->post_p_two);
                    ?></p>
                   <img class="img-center" src="{{ URL::asset('post/'.$blog_post->post_folder.'/'.$blog_post->post_p_two_img) }}" alt="">
                     <p><?php echo htmlspecialchars_decode($blog_post->post_p_three);
                    ?></p>
                   <img class="img-center" src="{{ URL::asset('post/'.$blog_post->post_folder.'/'.$blog_post->post_p_three_img) }}" alt="">
                </div>
                
               
                <div class="related_post">
                  <h2 class="wow fadeInLeftBig">Posts you may like <i class="fa fa-thumbs-o-up"></i></h2>
                 
                  <ul class="recentpost_nav relatedpost_nav wow fadeInDown animated">
                  	  @foreach($recent_post as $post)
                    <li><a href="{{url('blog/'.$post->post_url)}}"><img alt="" src="{{ URL::asset('post/'.$post->post_folder.'/'.$post->post_featured_image) }}"></a> <a href="{{url('blog/'.$post->post_url)}}" class="recent_title">{{$post->post_name}}</a></li>
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