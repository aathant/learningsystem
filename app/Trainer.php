<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable=['user_id','phone','avatar','degree_id','course_id','address','portfolio'];

	public function degree($value='')
	{
		return $this->belongsTo('App\Degree');
	}

	public function course($value='')
	{
		return $this->belongsTo('App\Course');
	}
	public function user($value='')
	{
		return $this->belongsTo('App\User');
	}
}
