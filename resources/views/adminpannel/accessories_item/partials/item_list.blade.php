<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">Item List</h3>
      </div><!-- /.box-header -->
      <div class="box-body" style="padding: 50px;">
        <table class="table table-sm">
          <thead>
            <tr>

              <th >Item Name</th>
              <th >Deatils</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($accessory_items as $item) 
            <tr>

              <td>{{$item->item_name}}<hr>
                <span class="label  black_label">{{$item->brands->brand_name}}</span>
                <span class="label black_label">{{$item->accessory_type->accessory_type_name}}</span>
                <hr>
                <img src="{{ URL::asset('accessory_item/'.$item->item_pic_folder.'/'.$item->item_pic) }}" alt="">
              </td>
              <td> 
                @include('adminpannel.accessories_item.partials.item_details')

              </td>
              <td>
                <ul class="order_ul" style="list-style: none;"> 

                  <li>
                    <span class="label label-success">
                      <a target="_blank" href="{{ URL('admin/accessories_item/edit',$item->id) }}" style="color: inherit;">Edit</a>
                    </span>
                  </li>
                  <li>
                    <span class="label label-primary">
                      <a target="_blank" href="{{ URL('admin/ItemPics',$item->id) }}" style="color: inherit;">Edit Gallery/Pics</a>
                    </span>
                  </li>

                </ul>
              </td>
            </tr>
            @endforeach
            
            


          </tbody>
        </table>

      </div><!-- /.box-body -->
    </div>
  </div>
</div>