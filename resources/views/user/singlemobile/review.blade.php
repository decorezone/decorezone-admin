
<div class="comments_section" id="comments_id" >
    <p class="c_heading">Comments And Reviews
    </p>

    <div class="row margin_top">
       <ul class="media-list">
          @foreach($comments as $com)
          
          <li class="media">
            <a href="#" class="pull-left">
                <img src="{{ URL::asset('user/user.png') }}" alt="" class="img-circle">
            </a>
            <div class="media-body">
                <span class="text-muted pull-right">
                    <small class="text-muted">{{\Carbon\Carbon::parse($com->created_at)->format('d F Y')}}</small>
                </span>
                <strong class="text-success">{{$com->user_name}}</span>
                    &nbsp;&nbsp;&nbsp;<span class="ratting">{{$com->ratting}}&nbsp;/&nbsp;5.0&nbsp;&nbsp;<i class="comments_ratting fa fa-star" aria-hidden="true"></i></strong>
                        <p>
                            {{$com->comments_text}}

                        </p>
                    </div>
                </li>
                
                

                @endforeach
            </ul>
            <div class="col-md-12">
             {{$comments->links()}}
         </div>

     </div>
     <hr>
     <form  action="{{url('Add_Mobile_Comments')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted" id="upload" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" id="mobile_id" name="mobile_id" value="{{$mobile_id }}">

      <div class="messages"></div>

      <div class="controls">

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="form_name">Name *</label>
                  <input id="form_name" type="text" name="user_name" class="form-control comments_input" placeholder="Please enter your Name *" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
              <label for="form_name">Ratting *</label>

              <select class="form-control comments_input" name="ratting">
                 <option value="5">5 Star</option>
                 <option value="4">4 Star</option>
                 <option value="3">3 Star</option>
                 <option value="2">2 Star</option>
                 <option value="1">1 Star</option>

             </select>
             <div class="help-block with-errors"></div>
         </div>
     </div>

 </div>
 <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="form_email">Email *</label>
          <input id="form_email" type="email" name="user_email" class="form-control comments_input" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
          <div class="help-block with-errors"></div>
      </div>
  </div>

</div>
<div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="form_message">Message *</label>
          <textarea id="form_message" name="comments_text" class="form-control comments_input" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
          <div class="help-block with-errors"></div>
      </div>
  </div>

  <div class="col-md-12">
   <p class="text-muted">
      <strong>*</strong>Your Email Will Not be share to any one
  </p>

</div>
<div class="col-md-12">
   <input type="submit"  class="btn btn-info form-control" value="Send Your FeedBack or Message">
</div>
</div>

</div>

</form>
</div>