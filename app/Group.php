<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=['name','course_id','batch_id','mentor_id'];

     public function users($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function students($value='')
    {
    	return $this->belongsToMany('App\Student');
    }
}
