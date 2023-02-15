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
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>