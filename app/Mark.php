<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable=['mark','student_id','group_id','assignment_id','homework_id','mentor_id','trainer_id'];
}
