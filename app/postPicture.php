<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postPicture extends Model
{
    protected $table = "post_picture";

     public function post()
    {
    	return $this->belongsTo('App\post', 'post_id', 'id');
    }

}
