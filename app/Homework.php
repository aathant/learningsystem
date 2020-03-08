<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable=['post','marks','start_time','end_time','user_id'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function assignment($value='')
    {
    	return $this->belongsTo('App\Assignment');
    }
}
