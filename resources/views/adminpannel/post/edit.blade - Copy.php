@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Post Content</a></li>
                <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Edit</a></li>
                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Post Picture</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="activity">

                    <div class="post">
                     <div class="row">
                        <div class="col-md-4">
                            <img src="{{ URL::asset('post/'.$post->post_folder.'/'.$post->post_featured_image) }}" alt="{{$post->post_name}}" width="270" height="200" style="    width: fit-content;">

                        </div>

                        <div class="col-md-8">

                            <p>
                                {!!$post->post_description!!}
                            </p>
                            <hr>
                            <span class="description">{{\Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</span>
                            <?php if($post->post_status==0){ ?>

                                <span class="label label-danger">
                                    Not Active
                                </span>
                            <?php }


                            else{ ?>

                                <span class="label label-success">
                                    Active
                                </span>
                            <?php } ?>

                        </div>

                    </div>   

                    <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> -</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> -</a>
                        </li>
                        <li class="pull-right">
                            <a href="#" class="link-black text-sm label label-success"><i class="fa fa-plus margin-r-5"></i> Add Product</a></li>
                        </ul>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Showing {{$post->products->count()}} Products</h3>

                                    </div>

                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tbody><tr>
                                                <th>Serial</th>
                                                <th>Image</th>
                                                <th>Producct</th>
                                                <th>Ratting & Reviews</th>
                                                <th>Buy Now</th>
                                            </tr>
                                            <tr>
                                                @foreach($post->products as $product)
                                                <td>{{$product->series}}</td>
                                                <td><img src="{{ URL::asset('products/'.$product->pic_folder.'/'.$product->featured_image) }}" alt="" style="width:200px;height: 120px; "></td>
                                                <td>{{$product->product_title}}</td>

                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="label label-primary" style="font-size:14px;margin: 2px;">
                                                            Ratting: {{$product->ratting}}
                                                        </a>
                                                    </li>
                                                    <li class="label label-primary" style="font-size:14px;margin: 2px;">
                                                        Price: {{$product->price}}
                                                    </li>
                                                    <br>
                                                    <li class="label label-primary" style="font-size:14px;margin: 2px;">
                                                     Total Reviews: {{$product->total_reviews}}
                                                 </li>
                                             </ul>
                                         </td>
                                         <td><a target="_blank" href="{{ URL($product->link_url) }}">
                                            <img src="{{ URL::asset('products/'.$product->link_folder.'/'.$product->link_img) }}" alt="" style="width:200px;height: 40px; ">
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody></table>
                        </div>

                    </div>

                </div>
            </div>
        </div>




<!-- <div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
<span class="username">
<a href="#">Sarah Ross</a>
<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
</span>
<span class="description">Sent you a message - 3 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore the hate as they create awesome
tools to help create filler text for everyone from bacon lovers
to Charlie Sheen fans.
</p>
<form class="form-horizontal">
<div class="form-group margin-bottom-none">
<div class="col-sm-9">
<input class="form-control input-sm" placeholder="Response">
</div>
<div class="col-sm-3">
<button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
</div>
 </div>
</form>
</div> -->



</div>

<div class="tab-pane" id="timeline">

    <ul class="timeline timeline-inverse">

        <li class="time-label">
            <span class="bg-red">
                10 Feb. 2014
            </span>
        </li>


        <li>
            <i class="fa fa-envelope bg-blue"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                <div class="timeline-body">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                    quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                    <a class="btn btn-primary btn-xs">Read more</a>
                    <a class="btn btn-danger btn-xs">Delete</a>
                </div>
            </div>
        </li>


        <li>
            <i class="fa fa-user bg-aqua"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                </h3>
            </div>
        </li>


        <li>
            <i class="fa fa-comments bg-yellow"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                <div class="timeline-body">
                    Take me to your leader!
                    Switzerland is small and neutral!
                    We are more like Germany, ambitious and misunderstood!
                </div>
                <div class="timeline-footer">
                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                </div>
            </div>
        </li>


        <li class="time-label">
            <span class="bg-green">
                3 Jan. 2014
            </span>
        </li>


        <li>
            <i class="fa fa-camera bg-purple"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                <div class="timeline-body">
                </div>
            </div>
        </li>

        <li>
            <i class="fa fa-clock-o bg-gray"></i>
        </li>
    </ul>
</div>
<!-- timline end -->

<div class="tab-pane" id="settings">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
</div>

</div>

</div>

</div>

@endsection