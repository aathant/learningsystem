<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Course;
use App\Student;
use App\Batch;
use App\Mentor;
use DB;
use Auth;
use Illuminate\Support\Facades\URL;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Group::all();
        return view('backend.groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $batches=Batch::all();
         $courses=Course::all();
         $students=Student::all();
         $mentor=Mentor::All();
         // dd($students);
        return view('backend.groups.create',compact('courses','students','batches','mentor'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request('states'));
        //validation //2
        $request->validate([
            "group"=>'required|min:1|max:191',
        ]);

        //Store Data //4
        $user=Auth::user()->id;
        $group=new Group;
        $group->name=request ('group');
        $group->course_id = request('course');
        $group->batch_id= request('batch');
        $group->mentor_id= $user;

         $group->save();//data INsert
        $group->students()->attach(request('states'));


        //Return redirect//5
         return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.groups.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('backend.groups.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function course_batch(Request $request)
    {
        $id=request('id');
        $batches=Batch::where('course_id',$id)->get();
        return $batches;
    }

     public function batch_student(Request $request)
    {
        $id=request('id');
        $students=Student::where('batche_id',$id)->get();
        return $students;
    }
}
