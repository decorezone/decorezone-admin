<style type="text/css">
.products-list .product-img img {
    width: 300px;
    height: 150px;
    border: 1px solid darkgrey;
    margin: 10px;
}
.products-list .product-description {
    display: block;
    color: #999;
    overflow: auto;
    white-space: pre-line;
    text-overflow: ellipsis;
}
.product-list-in-box>.item {
    border-bottom: 1px solid #8b8b8b;
}
</style>
<div class="row">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Products With Links Details</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>

        <div class="box-body">
            <ul class="products-list product-list-in-box">
                @foreach($post->products as $product)
                <li class="item">
                    <input type="hidden" name="product_id_for_links" id="product_id" value="{{$product->id}}" class="product_id">
                    <div class="product-img">
                        <img src="{{ URL::asset('products/'.$product->pic_folder.'/'.$product->featured_image) }}" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">{{$product->product_title}}</a>

                    </div>
                    <span class="product-description">
                        {{$product->description}}
                    </span>
                    <a  id="addNewLinkToProduct" data-target="#add-new-link-to-product" class="link-black text-sm label label-success pull-right addNewLinkToProduct"><i class="fa fa-plus margin-r-5"></i>Add Link To Product</a>
                    <br>

                @include('adminpannel.post.links-div')
                </li>
                @endforeach

            </ul>
        </div>


    </div>

</div>   

<!-- model -->
<div class="modal fade" id="addNewModelForLinks" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add New Link</h4>
                </div>
                <div class="modal-body">
                    <form  action="{{url('addNewLinkToProduct')}}" method="post" class="form-submit" id="formLinkData" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="productIDforLinks" id="productIDforLinks" value="">

                        <div class="row">
                            <div class="loadingLinksDiv" id="loadingLinksDiv" style="display:none">
                                <p style="text-align:center;">Please Wait! Data is Uploading</p>
                                <img src="{{ URL::asset('giphy.gif') }}" width="100" height="100" style="display: block;
                                margin-left: auto;
                                margin-right: auto;">
                            </div>
                            <div class="col-md-12" id="Product-Body">
                                <div class="box box-danger">

                                    <div class="box-body">
                                        <div class="row">
                                            
                                            <div class="col-xs-4">
                                                <label>Ratting Star</label>
                                                <input type="text" class="form-control" placeholder="Ratting Star" name="ratting_star" required="">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Product Price</label>
                                                <input type="number" class="form-control" placeholder="Product Price" name="price" required="">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Total Reviews Star</label>
                                                <input type="number" class="form-control" placeholder="Total Reviews" name="total_reviews" required="">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Link Status</label>
                                                <select class="form-control" name="status" required="">
                                                    <option value="0">De Active</option>
                                                    <option value="1">Active</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>URL</label>
                                                <input type="text" class="form-control" placeholder="Link" name="featured_link_url" required="">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>URL Link Image</label>
                                                <input type="file" class="form-control" name="featured_link_image" required="">
                                            </div>


                                        </div>
                                        <br>
                                        <div class="row">
                                           
                                            <div class="col-xs-12">
                                                <label>Action</label>
                                                <button type="submit" name="submit" class="btn btn-block btn-primary btn-flat">ADD NEW Link</button>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                           
                        </div>
                    </form>


                </div>
</div>

</div>

</div>