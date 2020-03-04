<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=['name','pdf_link','trainer_id','logo','description'];

	public function trainer($value='')
	{
		return $this->belongsTo('App\Trainer');
	}
}
