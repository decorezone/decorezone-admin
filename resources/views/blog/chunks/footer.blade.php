    <footer id="footer">
      <div class="footer_top">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>About Us</h2>
            <div class="subscribe_area">
              <p>Pakistan Smartest portal for giving the daily updates of mobile phones prices, you can find detail description of every mobile, compare to other devices and smart phones and find your dream phone.
                You can also search mobile phone according to your budget , also you can find mobile phone according to you need like RAM, Memory and Camera, keep visiting our site
              </p>
              <ul class="footer_labels">
               
                <li><a href="{{url('/')}}">Visit MobileinPakistan</a></li>
                
              </ul>
              
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Popular Post</h2>
            <ul class="catg3_snav ppost_nav">
             @foreach($recent_post as $post)
             <li>
              <div class="media"> <a class="media-left" href="{{url('blog/'.$post->post_url)}}"> <img class="catgsnav_img" src="{{ URL::asset('post/'.$post->post_folder.'/'.$post->post_featured_image) }}" alt=""> </a>
                <div class="media-body"> <a class="catg_title" href="{{url('blog/'.$post->post_url)}}">{{$post->post_name}}</a></div>
              </div>
            </li>
            @endforeach

            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="single_footer_top wow fadeInRight">
          <h2>Catagories</h2>
          <ul class="footer_labels">
            @foreach($cat_name as $cat)
            <li><a href="{{url('catagories/'.$cat->cat_url)}}">{{$cat->cat_name}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="single_footer_top wow fadeInRight">
          <h2>Contact Us</h2>
          <ul class="contact_us">
           
            <li class="phone">
             <i class="fa fa-phone"></i> Phone:  +92 300 2611204</li>
             <li class="email">
               <i class="fa fa-envelope"></i> mobileinpak@gmail.com</li>

             </ul>

             
           </div>
         </div>
       </div>
       <div class="footer_bottom">
        <div class="footer_bottom_left">
          <p><a href="https://mobileinpakistan.com">MobileinPakistan&nbsp;</a>Copyright &copy; 2019</p>
        </div>
        <div class="footer_bottom_right">
          <ul>
            <li><a class="tootlip" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter" href="https://twitter.com/MobileInPakist1"><i class="fa fa-twitter"></i></a></li>
            <li><a class="tootlip" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/mobileinpakistan"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tootlip" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram" href="https://www.instagram.com/mobileinpakistan1/"><i class="fa fa-instagram"></i></a></li>
            
            <li><a class="tootlip" target="_blank" data-toggle="tooltip" data-placement="top" title="Pinterest" href="https://www.pinterest.com/mobileinpakistan/"><i class="fa fa-pinterest"></i></a></li>
            
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
<script src="{{ URL::asset('userblog/assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('userblog/assets/js/wow.min.js') }}"></script>
<script src="{{ URL::asset('userblog/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('userblog/assets/js/slick.min.js') }}"></script>
<script src="{{ URL::asset('userblog/assets/js/jquery.li-scroller.1.0.js') }}"></script>
<script src="{{ URL::asset('userblog/assets/js/custom.js') }}"></script>
</body>
</html>