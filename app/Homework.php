<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable['question','marks','description','trainer_id','student_id','start_time','end_time'];
}
