<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">Search Accessory Type</h3>
      </div><!-- /.box-header -->
      <div class="box-body" style="padding: 50px;">
        <div class="row">

          @if (count($errors) > 0)
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible alert-danger fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              @foreach ($errors->all() as $error)
              <strong> {{ $error }}.</strong><br>
              @endforeach
            </div>
          </div>
          @endif
          @if (session('status_ok'))
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible alert-danger fade in">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>{{ session('status_ok') }}</strong>
           </div>
         </div>
         @endif


       </div>
       <form  action="{{url('admin/search_sub_accessories')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="row">
          <div class="col-md-12">
           <div class="form-group">
            <label for="cars">Select Catagories:</label>
            <select id="level" name="cat" class="form-control level" data-placeholder="Select an option" tabindex="-1" aria-hidden="true">

            </select>

          </div>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-md-12">
         <div class="form-group">
          <button type="submit" name="submit" class="btn-sm  btn btn-danger">Search Accessory</button>
        </div>
      </div>
    </div>

  </form>
</div><!-- /.box-body -->
</div>
</div>
</div>


<div id="line-example"></div>