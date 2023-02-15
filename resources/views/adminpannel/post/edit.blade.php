@extends('adminpannel.master')
@section('adminpagedash')
<section class="content">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Post Content</a></li>
                <!-- <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Edit</a></li>
                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Post Picture</a></li> -->
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="activity">

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
                        <a data-toggle="modal" data-target="#add-new-products" class="link-black text-sm label label-success"><i class="fa fa-plus margin-r-5"></i> Add Product</a>


                    </li>
                </ul>
               <!--  product section
                end product section -->
                @include('adminpannel.post.products')
                @include('adminpannel.post.add-new-products')
                @include('adminpannel.post.product_details_with_links')

                

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

</section>
@endsection
@section('javabee')
<script type="text/javascript">

    $.ajaxSetup({

        headers: {

          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

      }

  });
      //add product

      //Quick add unit
      $(document).on('submit', 'form#post-new-product-data', function(e) {
        $('#loading').show();
        e.preventDefault();
        $(this)
        .find('button[type="submit"]')
        .attr('disabled', true);
        var data =new FormData(this);
        console.log("DATA IS DATA"+data);
        

        $.ajax({
            method: 'POST',
            url: $(this).attr('action'),
            data: data,
            processData: false,
            contentType: false,
            success: function(result) {
                $('#loading').hide();
                if (result.success == true) {
                    toastr.success(result.msg);
                        function reload() {
                         document.location.reload();
                        }setTimeout(reload, 1000);
                 } else {
                      $("#post-new-product-data")
        .find('button[type="submit"]')
        .attr('disabled', false);
                    toastr.error(result.msg);
                }
            },
        });
    });


      
      //end product  
     
     //linkjs
     
     $(document).ready(function() {

        $('.addNewLinkToProduct').click(function() {
             
             //addNewModelForLinks //model
             var product_id=$(this).parents('li').find('input.product_id').val();
            // console.clear();
             console.log("product_id"+product_id);
               
              $('#productIDforLinks').val(product_id); 
              $('#addNewModelForLinks').modal('show');
             

        });

        //add
        $(document).on('submit', 'form#formLinkData', function(e) {
        $('#loadingLinksDiv').show();
        e.preventDefault();
        $(this)
        .find('button[type="submit"]')
        .attr('disabled', true);
        var data =new FormData(this);
        console.log("BINGO");
        $.ajax({
            method: 'POST',
            url: $(this).attr('action'),
            data: data,
            processData: false,
            contentType: false,
            success: function(result) {
                $('#loadingLinksDiv').hide();
                if (result.success == true) {
                    toastr.success(result.msg);
                        function reload() {
                         document.location.reload();
                        }setTimeout(reload, 1000);
                 } else {
                    $("#formLinkData")
        .find('button[type="submit"]')
        .attr('disabled', false);
                    toastr.error(result.msg); 
                }
            },
        });
    });

     $(document).on('submit', 'form#DeleteLinkForEver', function(e) {

       e.preventDefault();
        $(this)
        .find('button[type="submit"]')
        .attr('disabled', true);
        var data =new FormData(this);
         $.ajax({
            method: 'POST',
            url: $(this).attr('action'),
            data: data,
            processData: false,
            contentType: false,
            success: function(result) {
                $('#loadingLinksDiv').hide();
                if (result.success == true) {
                    toastr.success(result.msg);
                        function reload() {
                         document.location.reload();
                        }setTimeout(reload, 1000);
                 } else {
                      $(this)
        .find('button[type="submit"]')
        .attr('disabled', false);
                    toastr.error(result.msg);
                }
            },
        });
     });

     //delete product
     $(document).on('submit', 'form#DeleteProductForEver', function(e) {
      

       e.preventDefault();
        $(this)
        .find('button[type="submit"]')
        .attr('disabled', true);
        var data =new FormData(this);
         $.ajax({
            method: 'POST',
            url: $(this).attr('action'),
            data: data,
            processData: false,
            contentType: false,
            success: function(result) {
                $('#loadingLinksDiv').hide();
                if (result.success == true) {
                    toastr.success(result.msg);
                        function reload() {
                         document.location.reload();
                        }setTimeout(reload, 1000);
                 } else {
                      $('#DeleteProductForEver')
        .find('button[type="submit"]')
        .attr('disabled', false);
                    toastr.error(result.msg);
                }
            },
        });
     });

     //add
        $(document).on('submit', 'form.edit_product', function(e) {
        
        $(this).find('#editloading').show();
        var form_id=$(this).attr('id');
        console.log("form_id"+form_id);
        e.preventDefault();
        $(this)
        .find('button[type="submit"]')
        .attr('disabled', true);
        var data =new FormData(this);
        $.ajax({
            method: 'POST',
            url: $(this).attr('action'),
            data: data,
            processData: false,
            contentType: false,
            success: function(result) {
                $("#"+form_id).find('#editloading').hide();
                if (result.success == true) {
                    toastr.success(result.msg);
                        function reload() {
                         document.location.reload();
                        }setTimeout(reload, 1000);
                 } else {
                   
                    $("#"+form_id)
        .find('button[type="submit"]')
        .attr('disabled', false);
                    toastr.error(result.msg); 
                }
            },
        });
    });
     });//ready ened

  </script>
  @endsection