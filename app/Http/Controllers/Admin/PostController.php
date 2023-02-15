<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\post;
use App\category;
use App\product;
use Image;
use App\ImageStore;
use App\affiliate_link;
class PostController extends Controller
{
    //

	private $data=[];

	//ALTER TABLE `products` ADD `ratting` VARCHAR(100) NULL AFTER `post_id`, ADD `price` INT(11) NULL AFTER `ratting`, ADD `total_reviews` INT(11) NULL AFTER `price`, ADD `link_img` VARCHAR(200) NULL AFTER `total_reviews`, ADD `link_folder` VARCHAR(200) NULL AFTER `link_img`;
	//ALTER TABLE `products` ADD `link_url` VARCHAR(191) NULL AFTER `link_folder`;

	
	public function editAffiliatePost($id)
	{

		$post=post::where('id',$id)->where('post_type',1)->with('products.affiliate_links')->firstorfail();

		//dd($post);

	    return view('adminpannel.post.edit',compact('post'));

	}
}
