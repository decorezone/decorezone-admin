<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{


protected $fillable = ['page_name','page_url','page_content','page_status'];


    //
public static function get_all_active_pages() {
   
   $pages=page::where('page_status','1')->select('page_url','page_name')->get();
   return $pages;
}

}
