<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	protected $fillables = [ 'name' ];
    //Gatunek
    public function videos()
    {
    	return $this->belongsToMany('App\Video')->withTimestamps();
    }
}
