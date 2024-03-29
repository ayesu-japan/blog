<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
	{
		return $this->belongsTo('App\Category');
	}
	public function comments()
	{
		return $this->hasMany('App\Comment');
	}
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function nices() {
        return $this->hasMany('App\Nice');
    }
}
