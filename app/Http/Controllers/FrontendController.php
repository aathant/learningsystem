<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Skill;
use App\Trainer;
use App\User;
use App\Subject;
use App\Batch;
use App\Homework;
use App\Course;
use App\Mentor;
use App\Assignment;

class FrontendController extends Controller
{
    public function main($value='')
    {
    	# code...
        $courses=Course::All();
    	return view('frontend.main',compact('courses'));
    }

    public function register($value='')
    {
    	$skill=Skill::All();
        $batches=Batch::All();
    	return view('frontend.student_register',compact('skill','batches'));
    }

    public function subject_home($value='')
    {
        # code...
        $trainers=Trainer::All();
        $users=User::All();
        return view('frontend.sub_home',compact('trainers','users'));
    }

    public function Subject($id)
    {
        
        $subjects=Subject::where('trainer_id',$id)->get();
        $user=Auth::User();
        return view('frontend.subject_link',compact('subjects','user'));
    }


    public function group_communication($value='')
    {
        $assignment=Assignment::All();
        $homework=Homework::All();
        $user = Auth::User();
        return view('frontend.group',compact('homework','assignment','user'));
    } 

     public function show_comment(Request $request)
    {
        $id=request('id');
        $assignment=Assignment::where('homework_id',$id)->get();
        return $assignment;
    }

    public function teacher($value='')
    {
        # code...
        $trainers=Trainer::All();
        $mentors=Mentor::All();
        $users=User::All();
        return view('frontend.teacher',compact('trainers','mentors','users'));
    }

}
