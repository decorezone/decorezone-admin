<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\mobile;
use App\build;
use App\comment;
use App\feature;
use File;
use DB;
use App\post;
use App\category;
class AdminListing extends Controller
{
	public function AdminListing_Welcome()
	{
		
		$category=category::count();

		$posts=post::count();


		return view('adminpannel.welcome',compact('category','posts'));
	}

}