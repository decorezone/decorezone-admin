<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">Update Accessory Type
           
        </h3>
        <span style="float: right;" class="label label-danger"> <a href="{{url('admin/accessories')}}">Back</a> </span>

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
       <form  action="{{url('admin/updateAccessory')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{$accessory_type->id}}">

        <div class="row">
          <div class="col-md-3">
           <div class="form-group">
            <label>Accessory Type Name</label>
            <input type="text" name="accessory_type_name" class="form-control" placeholder="Accessory Type Name" required="" value="{{$accessory_type->accessory_type_name}}">
          </div>
        </div>


        <div class="col-md-3">
         <div class="form-group">
          <label>Status</label>
          <select name="accessory_type_status"  class="form-control">
            <option>Please Select Status</option>
            <option value="0" {{ $accessory_type->accessory_type_status==0 ? 'selected' : '' }}>Hide</option>
            <option value="1" {{ $accessory_type->accessory_type_status==1 ? 'selected' : '' }}>Show</option>
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
         <option value="0" {{ $accessory_type->top_accessory_type==0 ? 'selected' : '' }} >Not a Top Type</option>
         <option value="1"  {{ $accessory_type->top_accessory_type==1 ? 'selected' : '' }} >Top Type</option>
       </select>
     </div>
   </div>
 </div>
  @if($parent_name)
  <div class="row">
          <div class="col-md-12">
           <div class="form-group">
            <input type="hidden" id="accessory_id" value="{{$accessory_type->accessory_id}}">
           
            <input type="hidden" id="accessory_id_text" value="{{$parent_name->accessory_type_name}}">
            
            <label for="cars">Select Catagories:</label>
            <select id="level" name="cat" class="form-control level" data-placeholder="Select an option" tabindex="-1" aria-hidden="true" >

            </select>

          </div>
        </div>
      </div>
@endif
 <div class="row">
  <div class="col-md-12">
   <div class="form-group">
    <label>Catagory Title</label>
    <input type="text" name="accessory_type_title" class="form-control" placeholder="Accessory Type title" value="{{$accessory_type->accessory_type_title}}">
  </div>
</div>

<div class="col-md-12">
 <div class="form-group">
  <label>Accessory Type Keyword</label>
  <textarea required="" name="accessory_type_keyword" class="form-control">{{$accessory_type->accessory_type_keyword}}</textarea>
</div>
</div>

<div class="col-md-12">
 <div class="form-group">
  <label>Short Descrption</label>
  <textarea required="" name="accessory_type_description" class="form-control">{{$accessory_type->accessory_type_description}}</textarea>
</div>
</div>
</div>
<hr>
<div class="row">
  <div class="col-md-6">
   <div class="form-group">
    <button type="submit" name="submit" class="btn-sm  btn btn-danger">Update  Accessory</button>
  </div>
</div>
  

  <div class="col-md-6">
    <img src="{{ URL::asset('accessories/'.$accessory_type->folder.'/'.$accessory_type->logo) }}" alt="">
    
  </div>

</div>

</form>
</div><!-- /.box-body -->
</div>
</div>
</div>
