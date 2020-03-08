<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['user_id','namem','phone','address','education','city','accepted_year','dob','gender','p1','p1_phone','p1_relationship','p2','p2_phone','p2_relationship','because','batch_id'];

    public function skills($value='')
    {
    	return $this->belongsToMany('App\Skill')->withTimestamps();
    }
    
	public function user($value='')
	{
		return $this->belongsTo('App\User');
	}
	public function group($value='')
	{
		return $this->hasOne('App\Group');
	}
}
