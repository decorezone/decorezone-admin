<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">Add Accessory Type</h3>
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
       <form  action="{{url('admin/add_accessory_type')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="col-md-3">
           <div class="form-group">
            <label>Accessory Type Name</label>
            <input type="text" name="accessory_type_name" class="form-control" placeholder="Accessory Type Name" required="">

          </div>
        </div>


        <div class="col-md-3">
         <div class="form-group">
          <label>Status</label>
          <select name="accessory_type_status"  class="form-control">
            <option>Please Select Status</option>
            <option value="0">Hide</option>
            <option value="1">Show</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
       <div class="form-group">
        <label>Pic</label>
        <input type="file" name="logo" name="logo" accept="image/png,image/jpg,image/jpeg">
      </div>
    </div>
    <div class="col-md-3">
     <div class="form-group">
      <label>Top Accessory Type</label>
      <select name="top_accessory_type"  class="form-control">
       <option>Please Select Trending</option>
       <option value="0">Not a Top Type</option>
       <option value="1">Top Type</option>
     </select>
   </div>
 </div>
</div>

<div class="row">
  <div class="col-md-12">
   <div class="form-group">
    <label for="cars">Select Catagories:</label>
    <select id="level" name="cat" class="form-control level" data-placeholder="Select an option" tabindex="-1" aria-hidden="true">
       
</select>
    
 </div>
</div>
</div>


<div class="row">
  <div class="col-md-12">
   <div class="form-group">
    <label>Catagory Title</label>
    <input type="text" name="accessory_type_title" class="form-control" placeholder="Accessory Type title">
  </div>
</div>

<div class="col-md-12">
 <div class="form-group">
  <label>Accessory Type Keyword</label>
  <textarea required="" name="accessory_type_keyword" class="form-control"></textarea>
</div>
</div>

<div class="col-md-12">
 <div class="form-group">
  <label>Short Descrption</label>
  <textarea required="" name="accessory_type_description" class="form-control"></textarea>
</div>
</div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
   <div class="form-group">
    <button type="submit" name="submit" class="btn-sm  btn btn-danger">Add Accessory</button>
  </div>
</div>
</div>

</form>
</div><!-- /.box-body -->
</div>
</div>
</div>


<div id="line-example"></div>