<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\page;
use App\linkseo;
use App\ImageStore;
use Image;
use File;
class PagesController extends Controller
{

	public function index()
	{
		$pages=page::latest()->paginate(40);
		return view('adminpannel.pages.index',compact('pages'));

		# code...
	}

	public function show($value='')
	{
   	# code...
	}
	//
	public function create()
	{
		$page=page::all();
		return view('adminpannel.pages.create',compact('pages'));

		# code...
	}
	public function store(Request $request)
	{

		$this->validate($request, [
			'page_name' => 'required|unique:pages',
			'page_url' => 'required|unique:pages',
			'page_content' => 'required',

		]);


		$check_page_url_in_seo=linkseo::where('link_name',$request->page_url)->first();

		if($check_page_url_in_seo){

			return redirect()->back()->with('warning', ' SEO LINK AVAILABLE'.$check_page_url_in_seo);
		}

		$inputs=$request->except('_method', '_token');


		$page=page::create($inputs);

		$seo_links_inputs= ['link_name' => $page->page_url, 'pages_id' => $page->id];

		$seo_links=linkseo::create($seo_links_inputs);

		return redirect('admin/pages/')->with('status_ok', ' Page Added');
	}

	public function change_status($id)
	{
		$page=page::findorfail($id);
		$status="";
		if($page->page_status==0){
			$page->page_status=1;
			$status="Active";
		}else{
			$page->page_status=0;
			$status="De-Active";
		}
		$page->save();

		return redirect()->back()->with('status_ok', "========>".$page->page_name."========> status changes to ========> ".$status);

	}
	public function contact_us_form_check($id)
	{
		$page=page::findorfail($id);
		$status="";
		if($page->contact_us_form_check==0){
			$page->contact_us_form_check=1;
			$status="Contact Form Linked";
		}else{
			$page->contact_us_form_check=0;
			$status="Contact Form Remove";
		}
		$page->save();

		return redirect()->back()->with('warning',$status);

	}
	

	public function edit($id)
	{
		$page=page::findorfail($id);
		return view('adminpannel.pages.edit',compact('page'));


	}
	public function update(Request $request)
	{
		$this->validate($request, [
			'page_name' => 'required|unique:pages,page_name,'. $request->page_id.',id', 
			'page_url' => 'required|unique:pages,page_url,'. $request->page_id.',id', 
			'page_content' => 'required',
		]);

		$check_page_url_in_seo=linkseo::where('link_name',$request->page_url)->where('pages_id','!=',$request->page_id)->first();

		if($check_page_url_in_seo){

			return redirect()->back()->with('warning', ' SEO LINK AVAILABLE'.$check_page_url_in_seo);
		}
		$inputs=$request->except('_method', '_token', 'page_id','submit');

		$page=page::where('id', $request->page_id)->update($inputs);

		$seo_links_inputs= ['link_name' => $request->page_url];

		$seo_links=linkseo::where('pages_id', $request->page_id)->update($seo_links_inputs);


		return redirect()->back()->with('status_ok','All ok Updated');
		# code...
	}

	public function page_seo($page_id,$listing)
	{
		# code...
		$page_seo=linkseo::where('pages_id', $page_id)->firstorfail();
		return view('adminpannel.pages.page_seo',compact('page_seo','listing'));

	}
	public function page_seo_update(Request $request)
	{
		# code...
		$this->validate($request, [
			'link_title' => 'required',
			'link_keyword' => 'required',
			'link_description' => 'required',


		]);
		$linkseo=linkseo::findorfail($request->seo_id);

		$linkseo->link_title=$request->link_title;
		$linkseo->link_description=$request->link_description;
		$linkseo->link_keyword=$request->link_keyword;
		$linkseo->save();

		
		return redirect()->back()->with('status_ok','Seo Page Updated');
		

	}
	public function pictures($id)
	{
		# code...
		$page=page::findorfail($id);
		return view('adminpannel.pages.pictures',compact('page'));

	}
	public function fix_page_pic_folder($id)
	{
		$page=page::findorfail($id);

		if($page->folder_name){
			$image_store=ImageStore::folder_fix('page',$page->folder_name);
		}else{
			$data=time();
			$image_store=ImageStore::folder_fix('page',$data);
			$page->folder_name =$data;
			$page->save();

		}

		return view('adminpannel.pages.UpdatePictureDiv',compact('page'));

		# code...
	}
	public function upload_pictures(Request $request)
	{
		$this->validate($request, [
			'file' => 'required'

		]);

		$page=page::findorfail($request->page_id);
		$fileExtension = 'jpg';

		$files = $request->file;
		$path='page/' . $page->folder_name . '/';

		if($page->folder_name){


		}else{
			return redirect()->back()->with('warning','Page Folder Not Existis');
		}


		$uploadcount = 0;
		foreach($files as $file) {
			$rules = array('file' => 'required|mimes:jpeg,jpg,png'); 

			$validator = \Validator::make(array('file'=> $file), $rules);
			if($validator->passes()){

				$uploadcount++;

				$file_to_save = $page->id.$uploadcount.'.'.$fileExtension;
				$image_resize = Image::make($file);
				$image_resize->resize(850,443);
				$image_resize->save($path.'/'.$file_to_save);
			}
		}

		return redirect()->back()->with('status_ok','Uploaded');

		# code...
	}

	public function delete_page_pics($pic_name,$page_id)
	{
		# code...
		$page=page::findorfail($page_id);
		$dirpath='page/'.$page->folder_name;
		File::delete($dirpath.'/'.$pic_name);
		return view('adminpannel.pages.UpdatePictureDiv',compact('page'));
	}
	function make_me_featured($pic_name,$page_id){

		$page=page::findorfail($page_id);

		$page->featured_image_1=$pic_name;
		$page->save();
		
	return view('adminpannel.pages.UpdatePictureDiv',compact('page'));


	}
	function remove_me_fetured($pic_name,$page_id){

		$page=page::findorfail($page_id);

		$page->featured_image_1=NULL;
		$page->save();
		
	return view('adminpannel.pages.UpdatePictureDiv',compact('page'));


	}


}
