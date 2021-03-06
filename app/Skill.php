<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable=['name'];


    public function students($value='')
    {
    	return $this->belongsToMany('App\Student')->withTimestamps();
    }
}
