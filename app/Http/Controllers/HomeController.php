<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\linkseo;
use App\feedback;
use Illuminate\Support\Facades\Auth;
use App\page;
use App\post;
use App\category;
class HomeController extends Controller
{
     /**
     * @OA\Get(
     *      path="/view-all-catagories",
     *      operationId="view-all-catagories",
     *      tags={"view-all-catagories"},
     *      summary="Get list of view-all-catagories",
     *      description="Returns list of view-all-catagories",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       // return view('home');
        if (Auth::check()){
        
        return redirect('AdminDashboard');

      }else{
        return view('adminpannel.adminlogin');
      }
    }

  

    public function BlogAdminArea()
    {
      if (Auth::check()){
        
        return redirect('AdminDashboard');

      }else{
         return view('adminpannel.adminlogin');
      }


       
        
    }

    public function about_us(Request $request)
    {
     $url_name=$request->getRequestUri();
     $brands=Brand::where('brand_status',1)
     ->orderBy('top_brands', 'DESC')
     ->get();
     $linkseo=linkseo::where('link_name','=',$url_name)->first();
     return view('information.about_us',compact('brands','linkseo'));

 }
 public function privacy_policy(Request $request)
 { 
    $url_name=$request->getRequestUri();
    $brands=Brand::where('brand_status',1)
    ->orderBy('top_brands', 'DESC')
    ->get();
    $linkseo=linkseo::where('link_name','=',$url_name)->first();
    return view('information.privacy_policy',compact('brands','linkseo'));
}

public function advertise_with_us(Request $request)
{
    $url_name=$request->getRequestUri();
    $brands=Brand::where('brand_status',1)
    ->orderBy('top_brands', 'DESC')
    ->get();
    $linkseo=linkseo::where('link_name','=',$url_name)->first();
    return view('information.advertise_with_us',compact('brands','linkseo'));
}
public function disclaimer(Request $request)
{
  $url_name=$request->getRequestUri();
  $brands=Brand::where('brand_status',1)
  ->orderBy('top_brands', 'DESC')
  ->get();
  $linkseo=linkseo::where('link_name','=',$url_name)->first();
  return view('information.disclaimer',compact('brands','linkseo'));
}
public function contact_us(Request $request)
{
  $url_name=$request->getRequestUri();
  $brands=Brand::where('brand_status',1)
  ->orderBy('top_brands', 'DESC')
  ->get();
  $linkseo=linkseo::where('link_name','=',$url_name)->first();
  return view('information.contact_us',compact('brands','linkseo'));
}

public function feedback(Request $request){
    $this->validate($request, [
        'user_name' => 'required',
      'user_email' => 'required',
      'comments_text' => 'required',

  ]);
    $feedback =  new feedback;
    $feedback->user_name = $request->user_name;
    $feedback->user_email = $request->user_email;
    $feedback->comments_text = $request->comments_text;
    $feedback->save();


    return redirect()->back()->with('status_ok', ' Thank You For Your Time, We Will Contact You Soon');
}


public function pages($page_url)
{
  # code...
   $page=page::where('page_url',$page_url)->firstOrFail();
   $linkseo=linkseo::where('link_name','=',$page_url)->first();
    $brands=Brand::where('brand_status',1)
    ->orderBy('top_brands', 'DESC')
    ->get();

   return view('pages.index',compact('page','linkseo','brands'));
}


public function login( Request $request )
{
    

        // Validate form data
    $this->validate($request, [
        'email'     => 'required|email',
        'password'  => 'required|min:10'
    ]);

        // Attempt to authenticate user

        // If successful, redirect to their intended location
    if ( Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember) ) {
      $user=User::where('email',$request->email)->first();
      Auth::loginUsingId($user->id, TRUE);
       return redirect()->intended(route('AdminDashboard'));
 }
  return redirect()->back()->withInput($request->only('email', 'remember'));


}


//api

public function viewAllCatagories()
{
    // code...
     $getAllCatagories=category::with('parent_cat')->groupBy('id')->get();
        if ($getAllCatagories) {
            return [
                'data' => $getAllCatagories,
                'message' => 'Catagories  Found!',
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'Catagories Not Found!',
                'status' => 200
            ];
        }
}

public function viewAllCatagoriesParents()
{
    // code...
     $getAllCatagories=category::whereNull('category_id')->where('cat_status',1)->with('filter_sub_menue')->select(['id','cat_url','cat_name', 'category_id','cat_featured'])->orderBy('cat_featured', 'desc')->get();
        if ($getAllCatagories) {
            return [
                'data' => $getAllCatagories,
                'message' => 'Parents Catagories  Found '.$getAllCatagories->count(),
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'Catagories Not Found!',
                'status' => 200
            ];
        }
}

public function viewHomeFeaturedData()
{
    
  $data = []; 

  $featuredCatagories=category::where('cat_status',1)
     ->where('cat_featured',1)
     ->orderBy('cat_featured', 'desc')
     ->get();

   foreach ($featuredCatagories as $value) {

     $postData=post::with('author')->where('post_status',1)
                   ->where('cat_id',$value->id)
                   ->latest()->take(4)
                   ->orderBy('created_at', 'desc')
                   ->get()->toArray();
     if($postData){

         $data[] = [
                'id' => $value->id,
                'cat_url' => $value->cat_url,
                'cat_name' => $value->cat_name,
                'cat_featured' => $value->cat_featured,
                'cat_title' =>  $value->cat_title,
                'post_data'=>$postData
            ];
     }              

   }
        if ($data) {
            return [
                'data' => $data,
                'message' => 'NO POST FOUND  Found ',
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'NO POST FOUND Not Found!',
                'status' => 200
            ];
        }
}

public function featuredPostHome()
{


   
 $postData=post::with('author')->where('post_status',1)
                 ->where('post_featured',1)
                   ->latest()->take(7)
                   ->orderBy('created_at', 'desc')
                   ->get();

  if ($postData) {
            return [
                'data' => $postData,
                'message' => 'Featured Posts  Found '.$postData->count(),
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'Featured Posts Not Found!',
                'status' => 200
            ];
        }                   

}//end

public function catagoryPageDeatails($url)
{

$data = []; 

    $value=category::where('cat_status',1)
     ->where('cat_url',$url)
     ->firstorfail();

     $postData=post::with('author')->where('post_status',1)
                   ->where('cat_id',$value->id)
                   ->latest()->take(20)
                   ->orderBy('created_at', 'desc')
                   ->get()->toArray();
     $data[] = [
                'id' => $value->id,
                'cat_url' => $value->cat_url,
                'cat_name' => $value->cat_name,
                'cat_featured' => $value->cat_featured,
                'cat_title' =>  $value->cat_title,
                'cat_meta' =>  $value->cat_meta,
                'cat_short' =>  $value->cat_short,
                'description' =>  $value->description,
                'cat_folder' =>  $value->cat_folder,
                'cat_image' =>  $value->cat_image,
                'post_data'=>$postData
            ];  
         

   
        if ($data) {
            return [
                'data' => $data,
                'message' => 'Catagories  Found ',
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'Catagories Not Found!',
                'status' => 200
            ];
        }                 

}//end



}
