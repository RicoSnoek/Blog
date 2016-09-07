<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'title',
    	'uren',
    	'text',
    	'created_at',
        'user_id'
    	];

    protected $dates = ['created_at'];	

    public function scopeCreatedAt($query)
    {
    	$query->where('created_at', '<=', Carbon::now());
    }	

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }
}

