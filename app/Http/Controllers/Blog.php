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
class Blog extends Controller
{
  
  public function viewPostById($post_id)
    {
        // code...
        $post=post::where('id',$post_id)->get();
         if (count($post)>0) {
            return [
                'data' => $post,
                'message' => 'POST  Found!',
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'POST Not Found!',
                'status' => 200
            ];
        }

    }

    public function viewAffiliatePost($post_id){

        $post=post::where('id',$post_id)->where('post_type',1)->with('products.affiliate_links')->get();
         if ($post) {
            return [
                'data' => $post,
                'message' => 'POST  Found!',
                'status' => 200
            ];
        } else {
            return [
                'data' => null,
                'message' => 'POST Not Found!',
                'status' => 200
            ];
        }

    }


}
