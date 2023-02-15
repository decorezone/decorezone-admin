<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\post;
use App\category;
use App\product;
use Image;
use App\ImageStore;
use DB;
use App\affiliate_link;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Auth;
class BlogByAdmin extends Controller
{
    //

	private $data=[];
	public function addcat()
	{
		$parentCategory=category::whereNull('category_id')->get();

	

		return view('adminpannel.blog.addcat',compact('parentCategory'));
	}

	public function viewAllCatagories()
	{
		$category=category::with('parent_cat')->get();

		return view('adminpannel.blog.view_all_catagories',compact('category'));
	}

	function catagories_list_drop_down(Request $request){

		$category=category::whereNull('category_id')->with('childCat')->groupBy('id')->get();

		foreach ($category as $cat)
		{

			$this->data[] = [
				'id' => $cat->id,
				'text' => $cat->cat_name,
				'level' => $cat->level
			];
			
			if($cat->childCat){

				$this->get_me($cat);
			}


		}

		return $this->data;

	}
	public function get_me($cat){


		foreach ($cat->childCat as $sub_cat)
		{


			$this->data[] = [
				'id' => $sub_cat->id,
				'text' => $sub_cat->cat_name,
				'level' => $sub_cat->level
			];

			if($sub_cat->childCat){

				$this->get_me($sub_cat);
			}

		}

	}


	public function AddCatToDb(Request $request)
	{



		$this->validate($request, [
			'cat_name' => 'required|unique:categories',
			'cat_title' => 'required',
			'cat_meta' => 'required',
			'cat_short' => 'required'

		]);
		$catUrl=strtolower($request->cat_name);
		$catUrl = str_replace(' ', '-', $catUrl);
		$cat=new category;
		$cat->cat_name=$request->cat_name;
		$cat->cat_url=$catUrl;
		$cat->cat_title=$request->cat_title;
		$cat->cat_meta=$request->cat_meta;
		$cat->cat_short=$request->cat_short;
		$cat->cat_featured=$request->cat_featured;
		$cat->cat_status=$request->cat_status;
		$cat->description=$request->description;
        if($request->cat){
        	$cat->category_id  = $request->cat;
        }
		

		//save_pic
		$data=time();
		$cat->cat_folder =$data;
		$result = \File::makeDirectory('categories/' . $data . '/', 0777, true, true);
		$fileExtension = 'jpg';
		$path='categories/' . $data;
		if ($request->has('cat_image')) {
			$file = $request->file('cat_image');
			$filename = $file->getClientOriginalName();
			$img = \Image::make($file);
			$img->save($path.'/'.$filename);
			$cat->cat_image=$filename;

		}
		
		$cat->save();
       
		return redirect('view-all-catagories')->with('status_ok','category Added Successfully');
	}


	public function EditCatagory($category){


		$parentCategory=category::whereNull('category_id')->get();
		$cat=category::findOrFail($category);
		return view('adminpannel.blog.editcat',compact('parentCategory','cat'));

	}

	function UpdateCatagoryMain(Request $request){

		$this->validate($request, [
			'cat_name' => 'required|unique:categories,cat_name,'. $request->cat_id.',id',
			'cat_title' => 'required',
			'cat_meta' => 'required',
			'cat_short' => 'required',
			
		]);
		$cat=category::findOrFail($request->cat_id);
		$catUrl=strtolower($request->cat_name);
		$catUrl = str_replace(' ', '-', $catUrl);
		$cat->cat_name=$request->cat_name;
		$cat->cat_url=$catUrl;
		$cat->cat_title=$request->cat_title;
		$cat->cat_meta=$request->cat_meta;
		$cat->cat_short=$request->cat_short;
		$cat->cat_featured=$request->cat_featured;
		$cat->cat_status=$request->cat_status;
		$cat->description=$request->description;
        if($request->category_id){
        	$cat->category_id  = $request->category_id;
        }else{
        	$cat->category_id  = null;
        }
		
       if ($request->has('cat_image')) {
		//save_pic
		$data=time();
		$cat->cat_folder =$data;
		$result = \File::makeDirectory('categories/' . $data . '/', 0777, true, true);
		$fileExtension = 'jpg';
		$path='categories/' . $data;
		if ($request->has('cat_image')) {
			$file = $request->file('cat_image');
			$filename = $file->getClientOriginalName();
			$img = \Image::make($file);
			$img->save($path.'/'.$filename);
			$cat->cat_image=$filename;

		}
	   }
		
		$cat->save();


		return redirect()->back()->with('status_ok','category Updated');
	}


	public function searchpost()
	{
		$post=post::all();
		$category=category::all();
		return view('adminpannel.blog.searchpost',compact('post','category'));
	}
	public function searchpostcat(Request $request)
	{
		$post=post::where('cat_id',$request->cat_id)->get();
		$category=category::all();
		return view('adminpannel.blog.searchpost',compact('post','category'));
	}
	
	public function addpost()
	{
		$post=post::all();
		$category=category::all();
		return view('adminpannel.blog.addpost',compact('post','category'));
	}


	public function AddPostToDb(Request $request)
	{
		$this->validate($request, [
			'post_name' => 'required|unique:posts',
			'cat_id' => 'required',
			'post_titile' => 'required',
			'post_meta' => 'required',
			'post_short' => 'required',
			'post_featured_image' => 'required|mimes:jpeg,jpg,png',
			'post_description' => 'required',

		]);
		$postUrl=strtolower($request->post_name);
		$postUrl = str_replace(' ', '-', $postUrl);
		$post=new post;
		$post->post_url=$postUrl;
		$post->post_name=$request->post_name;
		$post->cat_id=$request->cat_id;
		$post->post_titile=$request->post_titile;
		$post->post_meta=$request->post_meta;
		$post->post_short=$request->post_short;
		$post->post_description=$request->post_description;
		$post->post_type=$request->post_type;
		$post->post_status=$request->post_status;
		$post->post_featured=$request->post_featured;
		$post->author_id=Auth::user()->id;
		$data=time();
		$post->post_folder = $data;
		$result = \File::makeDirectory('post/' . $data . '/', 0777, true, true);
		$path='post/' . $data . '/';
		$fileExtension = 'jpg';
		if ($request->has('post_featured_image')) {

			$post_featured_image="post_featured_image";
			$post_featured_image = $post_featured_image.'.'.$fileExtension;
			$image_resize = Image::make($request->post_featured_image);
			$image_resize->resize(480,260);
			$post->post_featured_image=$post_featured_image;
			$image_resize->save($path.'/'.$post_featured_image); 
		}
		
		
		$post->save();

        if($post->post_type==1){
        	return redirect('editAffiliatePost/'.$post->id)->with('status_ok','PLEASE ADD AFFILIATE RECORD');
        }else{

		 return redirect('searchpost')->with('status_ok','Post Added Successfully');	
        }

	}


	public function EditPost($post_id)
	{
		$post=post::find($post_id);
		$category=category::all();
		return view('adminpannel.blog.editpost',compact('post','category'));
	}

	public function UpdatePostToDb(Request $request){

		$this->validate($request, [
			'post_url' => 'required|unique:posts,post_url,'. $request->post_id.',id',
			'post_name' => 'required|unique:posts,post_name,'. $request->post_id.',id', 
			'cat_id' => 'required',
			'post_titile' => 'required',
			'post_meta' => 'required',
			'post_short' => 'required',
			
		]);
		$post=post::find($request->post_id);
		$post->post_url=$request->post_url;
		$post->post_name=$request->post_name;
		$post->post_titile=$request->post_titile;
		$post->post_meta=$request->post_meta;
		$post->post_short=$request->post_short;
		$post->cat_id=$request->cat_id;
		$post->post_description=$request->post_description;
		$post->post_type=$request->post_type;
		$post->post_status=$request->post_status;
		$post->save();

		return redirect()->back()->with('status_ok','post Updated');

	}

	function ChangePostStatus($post_id){
		$post=post::find($post_id);
		return view('adminpannel.blog.changepoststatus',compact('post'));

	}
	function changepoststatusdb(Request $request){
		$post=post::find($request->post_id);
		$post->post_status=$request->post_status;
		$post->save();
		return redirect()->back()->with('status_ok','post Updated');

	}

	function PostSeoLinks($post_id)
	{
		$post=post::find($post_id);
		return view('adminpannel.blog.PostSeoLinks',compact('post'));
		
	}
	function updateseopost(Request $request){
		$post=post::find($request->post_id);
		$post->post_titile=$request->post_titile;
		$post->post_meta=$request->post_meta;
		$post->post_short=$request->post_short;
		$post->save();
		return redirect()->back()->with('status_ok','post Updated');
	}

	function EditPostPicture($post_id)
	{
		$post=post::find($post_id);
		return view('adminpannel.blog.EditPostPicture',compact('post'));
		
	}

	// function editAffiliate($post_id)
	// {
	// 	$products=product::where('post_id',$post_id)->get();
	// 	$post=post::findorfail($post_id);
	// 	return view('adminpannel.blog.editAffiliate',compact('products','post_id','post'));
		
	// }
	function addNewLinkToProduct(Request $request)
	{
     
       

		if (request()->ajax()) {
			try {
				$input = $request->only(['productIDforLinks','featured_link_image', 'ratting_star','price','total_reviews','status','featured_link_url']);
				
              
				DB::beginTransaction();

				$affiliate_link=new affiliate_link;
				
				$affiliate_link->status=$input['status'];
				$affiliate_link->product_id=$input['productIDforLinks'];
				$affiliate_link->ratting_star=$input['ratting_star'];
				$affiliate_link->price=$input['price'];
				$affiliate_link->total_reviews=$input['total_reviews'];
				$affiliate_link->featured_link_url=$input['featured_link_url'];
				if ($request->has('featured_link_image')) {
					$result=ImageStore::storeImage('linksFolder',$request->featured_link_image);
					if($result){
					$affiliate_link->featured_link_folder=$result[1];//folder name
					$affiliate_link->featured_link_image=$result[0];//featured image
				
				}
			}

	$affiliate_link->save();
	DB::commit();
	$output = ['success' => true,
	'msg' => 'Link Added '.$affiliate_link->id
];
}catch (\Exception $e) {
	DB::rollBack();
	$output = ['success' => false,
	'msg' => "File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage()];
}
return $output;
}



	}//end
	function deleteLinkForever(Request $request)
	{


		if (request()->ajax()) {
			try {
				$input = $request->only(['link_id_to_delete']);
				

				DB::beginTransaction();
                $link=affiliate_link::findorfail($input['link_id_to_delete']);
                $dirpath='linksFolder/'.$link->featured_link_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                	$link->delete();
                }else{
                	throw new \Exception("Please Contact Admin");
                }
                DB::commit();
                $output = ['success' => true,
                'msg' => 'Deleted '];
            }
            catch (\Exception $e) {
            	DB::rollBack();
            	$output = ['success' => false,
            	'msg' => "File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage()];
            }
            return $output;
        }
	}//link Deleted
function DeleteProductForEver(Request $request)
	{


		if (request()->ajax()) {
			try {
				$input = $request->only(['product_id_to_delete']);
				
                $msg="";
				DB::beginTransaction();
				$product=product::where('id',$input['product_id_to_delete'])->with('affiliate_links')->firstorfail();
                foreach($product->affiliate_links as $link){
                	$link=affiliate_link::findorfail($link->id);
                $dirpath='linksFolder/'.$link->featured_link_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                	$link->delete();
                }else{
                	throw new \Exception("Please Contact Admin");
                }
                }//end link

                $dirpath='products/'.$product->pic_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                }else{
                	//throw new \Exception("Please Contact Admin");
                	$msg=$msg."Main Folder Not Deleted ,Contact Admin";
                }
                $dirpath='linksFolder/'.$product->link_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                	
                }else{
                	$msg=$msg."Link Folder Not Deleted ,Contact Admin";
                }
                $product->delete();
                DB::commit();
                $output = ['success' => true,
                'msg' => 'Deleted'.$msg];
            }
            catch (\Exception $e) {
            	DB::rollBack();
            	$output = ['success' => false,
            	'msg' => "File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage()];
            }
            return $output;
        }
	}//link Deleted
	function addAffiliate(Request $request)
	{


		if (request()->ajax()) {
			try {
				$input = $request->only(['post_id','product_title', 'featured_link_image', 'ratting_star','price','total_reviews','status','featured_image','description','featured_link_url','series']);
				if(product::where('product_title',$input['product_title'])->first()){
					throw new \Exception("Product Title Exist Please Add New One");
				}

				DB::beginTransaction();

				$product=new product;
				$product->product_title=$input['product_title'];
				$product->status=$input['status'];
				$product->description=$input['description'];
				$product->post_id=$input['post_id'];
				$product->ratting=$input['ratting_star'];
				$product->price=$input['price'];
				$product->total_reviews=$input['total_reviews'];
				$product->series=$input['series'];
				$product->link_url=$input['featured_link_url'];
				if ($request->has('featured_image')) {
					$result=ImageStore::storeImage('products',$request->featured_image);
					if($result){
					$product->pic_folder=$result[1];//folder name
					$product->featured_image=$result[0];//featured image
						if ($request->has('slider_images')) {
						$result=ImageStore::multipleImageUpload('products',$result[1],$request->slider_images);
			    }
				}
			}
			if ($request->has('featured_link_image')) {
				$result=ImageStore::storeImage('linksFolder',$request->featured_link_image);
				if($result){
					$product->link_folder=$result[1];//folder name
					$product->link_img=$result[0];//featured image
					//$folder_name=$result[1];
				
		      }
	        }

	$product->save();
	DB::commit();
	$output = ['success' => true,
	'msg' => 'Product Added '.$product->id
];
}catch (\Exception $e) {
	DB::rollBack();
	$output = ['success' => false,
	'msg' => "File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage()];
}
return $output;
}


}

function updateAffiliate(Request $request)
{
	$this->validate($request, [
		'product_title' => 'required|unique:products,product_title,'. $request->product_id.',id',
		'status' => 'required',
		'description'=>'required',
		'series'=>'required',

	]);

	$product=product::findorfail($request->product_id);
	$product->product_title=$request->product_title;
	$product->status=$request->status;
	$product->description=$request->description;
	$product->series=$request->series;
	$product->save();

	return redirect()->back()->with('status_ok','Added');
}

function editProduct($id){

	$product=product::findorfail($id)->first();
	$post=post::findorfail($product->post_id);
	return view('adminpannel.blog.editProduct',compact('product','post'));
}

    //
    //Links
function AddLinks($productid)
{

	$affiliate_links=affiliate_link::where('product_id',$productid)->get();
	$product=product::findorfail($productid);
	return view('adminpannel.blog.affiliate_link',compact('affiliate_links','productid','product'));

}
function storeLinks(Request $request)
{

	$this->validate($request, [
		'featured_link_url' => 'required',
		'ratting_star' => 'required',
		'price'=>'required',
		'ratting_star'=>'required',
		'total_reviews'=>'required',
		'featured_link_image' => 'nullable|mimes:jpeg,jpg,png',

	]);

	$affiliate_link=new affiliate_link;
	$affiliate_link->featured_link_url=$request->featured_link_url;
	$affiliate_link->status=$request->status;
	$affiliate_link->ratting_star=$request->ratting_star;
	$affiliate_link->total_reviews=$request->total_reviews;
	$affiliate_link->total_reviews=$request->total_reviews;
	$affiliate_link->total_reviews=$request->total_reviews;
	$affiliate_link->product_id=$request->product_id;
	$affiliate_link->price=$request->price;

	if ($request->has('featured_link_image')) {

		$result=ImageStore::storeImage('linksFolder',$request->featured_link_image);
		if($result){
				$affiliate_link->featured_link_folder=$result[1];//folder name
				$affiliate_link->featured_link_image=$result[0];//featured image
			}


		}
		$affiliate_link->save();
		
		return redirect()->back()->with('status_ok','Added');
	}

	public function editProductLink($link)
	{
		// code...
		$link=affiliate_link::findorfail($link);
		$product=product::findorfail($link->product_id);
		return view('adminpannel.blog.editProductLink',compact('link','product'));
	}

	function updateLinks(Request $request)
	{
		$this->validate($request, [
			'featured_link_url' => 'required',
			'ratting_star' => 'required',
			'price'=>'required',
			'ratting_star'=>'required',
			'total_reviews'=>'required',
			'featured_link_image' => 'nullable|mimes:jpeg,jpg,png',

		]);

		$affiliate_link=affiliate_link::findorfail($request->link_id);
		$affiliate_link->featured_link_url=$request->featured_link_url;
		$affiliate_link->status=$request->status;
		$affiliate_link->ratting_star=$request->ratting_star;
		$affiliate_link->total_reviews=$request->total_reviews;
		$affiliate_link->total_reviews=$request->total_reviews;
		$affiliate_link->total_reviews=$request->total_reviews;
		$affiliate_link->price=$request->price;
		
		
		$affiliate_link->save();
		
		return redirect()->back()->with('status_ok','Updated');
	}

	public function editPictureProduct($id)
	{
		// code...
		$product=product::find($id);
		return view('adminpannel.blog.EditProductPicture',compact('product'));
	}

	function editPictureProductUpdate(Request $request){

		$this->validate($request, [
			'product_id' => 'required',
			'featured_image' => 'nullable|mimes:jpeg,jpg,png',

		]);
		$product=product::find($request->product_id);
		if ($request->has('featured_image')) {

			$result=ImageStore::updateImage('products',$product->pic_folder,$request->featured_image);
			if($result){
				$product->featured_image=$result[0];//featured image
			}


		}
		$product->save();
		return redirect()->back()->with('status_ok','product picture Updated');
	}

	public function editPicturelinks($id)
	{
		// code...
		$affiliate_link=affiliate_link::find($id);
		return view('adminpannel.blog.EditlinkPicture',compact('affiliate_link'));
	}

	function editPicturelinksUpdate(Request $request){

		$this->validate($request, [
			'affiliate_link_id' => 'required',
			'featured_link_image' => 'nullable|mimes:jpeg,jpg,png',

		]);
		$affiliate_link=affiliate_link::find($request->affiliate_link_id);
		if ($request->has('featured_link_image')) {

			$result=ImageStore::updateImage('linksFolder',$affiliate_link->featured_link_folder,$request->featured_link_image);
			if($result){
				$affiliate_link->featured_link_image=$result[0];//featured image
			}


		}
		$affiliate_link->save();
		return redirect()->back()->with('status_ok','affiliate_link picture Updated');
	}

	public function PostDeleteCompletely($id)
	{
		// code...
		$post=post::where('id',$id)->with('products.affiliate_links')->firstorfail();

		if($post->post_type==1){
           
           	$post=post::where('id',$id)->where('post_type',1)->with('products.affiliate_links')->firstorfail();
                foreach($post->products as $product){
                	$p=product::where('id',$product->id)->with('affiliate_links')->firstorfail();
                $dirpath='products/'.$p->pic_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                	
                }//product deleted
                $dirpath='linksFolder/'.$p->link_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                	
                }//link folder of product dleted

                 foreach($product->affiliate_links as $link){
                	$link=affiliate_link::findorfail($link->id);
                $dirpath='linksFolder/'.$link->featured_link_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                }

                }//end link



		}
	}

			$dirpath='post/'.$post->post_folder;
                if (File::exists($dirpath)){
                	File::deleteDirectory($dirpath);
                
                }
		
       $post->delete();
       return redirect()->back()->with('status_ok','Post Deleted Successfully');
	}

    //
	
	function updatepostpictures(Request $request){

		$this->validate($request, [
			'post_id' => 'required',
			'post_p_one_img' => 'nullable|mimes:jpeg,jpg,png',
			'post_p_two_img' => 'nullable|mimes:jpeg,jpg,png',
			'post_p_three_img' => 'nullable|mimes:jpeg,jpg,png',

		]);
		$post=post::find($request->post_id);
		$data=$post->post_folder;
		$path='post/' . $data . '/';
		$fileExtension = 'jpg';
		if ($request->has('post_featured_image')) {

			$post_featured_image="post_featured_image";
			$post_featured_image = $post_featured_image.'.'.$fileExtension;
			$image_resize = Image::make($request->post_featured_image);
			$image_resize->resize(480,260);
			$post->post_featured_image=$post_featured_image;
			$image_resize->save($path.'/'.$post_featured_image); 


			
		}
		if ($request->has('post_p_one_img')) {

			$post_p_one_img="post_p_one_img";
			$post_p_one_img = $post_p_one_img.'.'.$fileExtension;
			$image_resize = Image::make($request->post_p_one_img);
			$image_resize->resize(480,260);
			$post->post_p_one_img=$post_p_one_img;
			$image_resize->save($path.'/'.$post_p_one_img);
		}
		if ($request->has('post_p_two_img')) {

			$post_p_two_img="post_p_two_img";
			$post_p_two_img = $post_p_two_img.'.'.$fileExtension;
			$image_resize = Image::make($request->post_p_two_img);
			$image_resize->resize(480,260);
			$post->post_p_two_img=$post_p_two_img;
			$image_resize->save($path.'/'.$post_p_two_img);
		}
		if ($request->has('post_p_three_img')) {

			$post_p_three_img="post_p_three_img";
			$post_p_three_img = $post_p_three_img.'.'.$fileExtension;
			$image_resize = Image::make($request->post_p_three_img);
			$image_resize->resize(480,260);
			$post->post_p_three_img=$post_p_three_img;
			$image_resize->save($path.'/'.$post_p_three_img);
		}
		$post->save();
		return redirect()->back()->with('status_ok','post picture Updated');
	}



	function edit_product_of_post(Request $request)
	{


		if (request()->ajax()) {
			try {
				$input = $request->only(['product_id','product_title', 'ratting_star','price','total_reviews','status','description','featured_link_url','series']);
				if(product::where('product_title',$input['product_title'])->where('id','!=',$input['product_id'])->first()){
					throw new \Exception("Product Title Exist Please Add New One");
				}

				DB::beginTransaction();

				$product=product::findorfail($input['product_id']);
				$product->product_title=$input['product_title'];
				$product->status=$input['status'];
				$product->description=$input['description'];
				$product->ratting=$input['ratting_star'];
				$product->price=$input['price'];
				$product->total_reviews=$input['total_reviews'];
				$product->series=$input['series'];
				$product->link_url=$input['featured_link_url'];

	$product->save();
	DB::commit();
	$output = ['success' => true,
	'msg' => 'Product Updated '.$product->id
];
}catch (\Exception $e) {
	DB::rollBack();
	$output = ['success' => false,
	'msg' => "File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage()];
}
return $output;
}


}

}
