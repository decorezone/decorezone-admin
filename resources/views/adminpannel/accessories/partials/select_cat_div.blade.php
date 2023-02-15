   @foreach ($accessory_type_for_select as $category)
   
	<option value="{{$category->id}}">{{$category->accessory_type_name}}</option>
	
	 
   @endforeach
