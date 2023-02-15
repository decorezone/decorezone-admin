<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public function post()
    {
        return $this->belongsTo('App\post','post_id');
    }
     public function affiliate_links()
    {
        return $this->hasMany('App\affiliate_link','product_id');
    }
}
