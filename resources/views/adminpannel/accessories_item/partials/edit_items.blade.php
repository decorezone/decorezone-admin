<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">Update Item Item</h3>
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

     <form  action="{{url('admin/accessories_item/update')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted"  enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $accessory_item->id }}">
      <div class="row">
        <div class="col-md-12">
         <div class="form-group">
          <label>Item Type URL</label>
          <input type="text" name="item_url" class="form-control"  value="{{$accessory_item->item_url}}" required="">

        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-6">
       <div class="form-group">
        <label>Item Type Name</label>
        <input type="text" name="item_name" class="form-control" placeholder="Item Item Name" required="" value="{{$accessory_item->item_name}}">

      </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
      <label>Brand</label>

      <select name="brand"  class="form-control">
        <option>Please Select Brands</option>
        @foreach($Brands as $brand)
        
        <option value="{{$brand->id}}" {{ $brand->id==$accessory_item->brand ? 'selected' : '' }}>{{$brand->brand_name}}

        </option>
        @endforeach
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
   <div class="form-group">
    <label>Item Model(If Any)</label>
    <input type="text" name="model" value="{{$accessory_item->model}}" class="form-control" placeholder="Item Model Name" >

  </div>
</div>
<div class="col-md-6">
 <div class="form-group">
  <label>Item Series (If Any)</label>
  <input type="text" name="series" value="{{$accessory_item->series}}" class="form-control" placeholder="Item Series Name" >

</div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
   <div class="form-group">
    <label>Featured (YES / NO)</label>
    <select name="featured"  class="form-control" required="">
     <option value="1" {{ $accessory_item->featured==0 ? 'selected' : '' }}>NOT</option>
     <option value="1" {{ $accessory_item->featured==1 ? 'selected' : '' }}>YES</option>
   </select>

 </div>
</div>
<div class="col-md-6">
 <div class="form-group">
  <label>Coming Soon</label>
  <select name="coming_soon"  class="form-control">
    <option value="1" {{ $accessory_item->coming_soon==0 ? 'selected' : '' }}>Coming Soon</option>
    <option value="1" {{ $accessory_item->coming_soon==1 ? 'selected' : '' }}>Available</option>
  </select>

</div>
</div>
</div>
<div class="row">
  <div class="col-md-12">
   <div class="form-group">
    <label>Status</label>
    <select name="item_status"  class="form-control">
      <option value="1" {{ $accessory_item->item_status==0 ? 'selected' : '' }}>HIDE</option>
      <option value="1" {{ $accessory_item->item_status==1 ? 'selected' : '' }}>SHOW</option>
    </select>
  </div>
</div>

</div>
<div class="row">
  <div class="col-md-6">
   <div class="form-group">
    <label>PKR</label>
    <input type="number" value="{{ $accessory_item->pkr_price}}" required="" name="pkr_price" class="form-control" placeholder="Item Pkr Price" ></div>
  </div>
  <div class="col-md-6">
   <div class="form-group">
    <label>$ Price</label>
    <input type="number" value="{{ $accessory_item->dollor_price}}" name="dollor_price" class="form-control" placeholder="Item $ Price" ></div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <input type="hidden" name="" id="accessory_id" value="{{$accessory_item->accessory_type->id}}">
    <input type="hidden" name="" id="accessory_id_text" value="{{$accessory_item->accessory_type->accessory_type_name}}">
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
    <label>Item Title</label>
    <input type="text" value="{{ $accessory_item->item_title}}" name="item_title" required="" class="form-control" placeholder="Item Type title">
  </div>
</div>

<div class="col-md-12">
 <div class="form-group">
  <label>Item Type Keyword</label>
  <textarea required=""  name="item_keyword" class="form-control">{{ $accessory_item->item_keyword}}</textarea>
</div>
</div>

<div class="col-md-12">
 <div class="form-group">
  <label>Short Descrption</label>
  <textarea required="" name="item_description" class="form-control">{{ $accessory_item->item_description}}</textarea>
</div>
</div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
   <div class="form-group">
    <button type="submit" name="submit" class="btn-sm  btn btn-danger">Update Item</button>
  </div>
</div>
</div>

</form>
</div><!-- /.box-body -->
</div>
</div>
</div>