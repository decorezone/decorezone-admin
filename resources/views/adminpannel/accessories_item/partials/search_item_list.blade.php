<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">Search Item Item</h3>
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

     <form  action="{{url('admin/add_item')}}" method="post" class="form-submit labels-uppercase MultiFile-intercepted"  enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label>Item Type Name</label>
          <input type="text" name="item_name" class="form-control" placeholder="Item Item Name" required="">

        </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">
        <label>Brand</label>
        <select name="brand"  class="form-control">
          <option>Please Select Brands</option>
          @foreach($Brands as $brand)
          <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  
</form>
</div><!-- /.box-body -->
</div>
</div>
</div>