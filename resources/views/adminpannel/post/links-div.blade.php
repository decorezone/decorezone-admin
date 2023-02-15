<div class="table-responsive">
	<table class="table no-margin">
		<thead>
			<tr>
				<th>Image</th>
				<th>URL Link</th>
				<th>Ratting</th>
				<th>Price</th>
				<th>Reviews</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($product->affiliate_links as $link)
			<tr>
				<td><img src="{{ URL::asset('linksFolder/'.$link->featured_link_folder.'/'.$link->featured_link_image) }}" alt="Product Image" style="width: 100px;
				height: 40px;"></td>
				<td>{{$link->featured_link_url}} 
					@if($link->status==1)
					<span class="label label-success">Active</span>
					@else
					<span class="label label-danger">Not Active</span>
					@endif
				</td>
				<td>{{$link->ratting_star}}</td>
				<td>{{$link->price}}</td>
				<td>{{$link->total_reviews}}</td>
				<td>
					<form  action="{{url('delete-link-forever')}}" method="post" id="DeleteLinkForEver">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="link_id_to_delete" value="{{$link->id}}">
						<button type="submit" name="submit" style="margin-top: 20px;    background: #dd4b39;
    color: white;
    font-size: 12px;" class="link-black text-sm label" >Delete Link</button>
					</form>	
	

				</td>
			</tr>
			@endforeach



		</tbody>
	</table>
</div>