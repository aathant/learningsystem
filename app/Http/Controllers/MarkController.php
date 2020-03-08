<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark;
use App\Assignment;
use App\Homework;
use App\Student;
use App\Trainer;
use App\Mentor;
use App\Group;
use DB;


class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["mark"=>'required|min:1|max:191']);
        // dd($request);
        $homework_id=$request->post_id;
        $assignment_id=$request->assignment_id;
        $mark=request('mark');
        $trainer=Homework::Where('id','=',$homework_id)->get();
        //dd($trainer);
        foreach ($trainer as $key => $value) {
            $trainer_id=$value['user_id'];
        }
        $student=Assignment::Where('id','=',$assignment_id)->get();
        // dd($student);
        foreach ($student as $key => $value) {
            $student_id=$value['user_id'];
        }
        $group = DB::table('group_student')
            ->join('groups', 'groups.id', '=', 'group_student.group_id')
            ->get();
        foreach ($group as $grou) {
            // dd($grou->mentor_id);
            $mentor_id=$grou->mentor_id;
            $group_id=$grou->group_id;
            // dd($group_id);
        }
        $marks=new Mark();
        $marks->mark=$mark;
        $marks->homework_id=$homework_id;
        $marks->assignment_id=$assignment_id;
        $marks->student_id=$student_id;
        $marks->trainer_id=$trainer_id;
        $marks->mentor_id=$mentor_id;
        $marks->group_id=$group_id;

        $marks->save();  

        //Return redirect//5
         return redirect()->route('group_communication');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
