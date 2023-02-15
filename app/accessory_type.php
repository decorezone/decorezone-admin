<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accessory_type extends Model
{
    //

	public function accessory_types()
	{
		return $this->hasMany('App\accessory_type','accessory_id');
	}

	public function childrenAccessory_types()
	{
		return $this->hasMany('App\accessory_type','accessory_id')->with('accessory_types');
	}


}
