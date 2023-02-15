<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\accessory_type;
use App\Brand;

class accessory_item extends Model
{
    //

	public static function accessory_item_url($brand,$type,$ite_name) {
		$str="";
		$str=$str."-".$ite_name;

		$Brand=Brand::find($brand);

		$str="-".$str."-".$Brand->brand_name;

		$accessory_type=accessory_type::find($type);

		$str="-".$str.$accessory_type->accessory_type_name;

		return $str;


	}

	public function brands()
	{
		return $this->belongsTo('App\Brand','brand');
	}
	public function accessory_type()
	{
		return $this->belongsTo('App\accessory_type','accessory_type_id');
	}




}
