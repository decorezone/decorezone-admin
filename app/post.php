<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\product','post_id');
    }
     public function author()
    {
        return $this->belongsTo('App\User','author_id')->select(array('id', 'name', 'type'));
    }
}
