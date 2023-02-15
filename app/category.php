<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //

public static function cat_find($var1) {


    	$data=category::where('cat_show','=', $var1)->select('cat_name','cat_url')->take(1)->get();

          
    	return $data;

    	
    // do something
}

   public function cat_types()
    {
        return $this->hasMany('App\category','category_id');
    }

    public function childCat()
    {
        return $this->hasMany('App\category','category_id')->with('cat_types');
    }

    public function parent_cat()
    {
        return $this->belongsTo('App\category','category_id');
    }

    public function sub_menue()
    {
        return $this->hasMany('App\category','category_id');
    }
    public function filter_sub_menue()
    {
        return $this->hasMany('App\category','category_id')->select(array('id', 'cat_url', 'cat_name','category_id'));
    }
    public function post_data()
    {
        return $this->hasMany('App\post','cat_id');
    }




}
