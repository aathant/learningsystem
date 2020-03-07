<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable=['comment','homework_id','user_id'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function homework($value='')
    {
    	return $this->belongsTo('App\Homework');
    }
}
