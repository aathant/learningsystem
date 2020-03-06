<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homework;
use App\Trainer;
use App\Student;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.homeworks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainer=Trainer::All();
        $student=Student::All();
        return view('backend.homeworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation //2
        $request->validate([
            "question"=>'required|min:5|max:191',
            "marks"=>'required',
            "trainer_id"=>'required',
            "start_time"=>'required',
            "end_time"=>'required',
        ]);

        //Store Data //4
        $homoework=new Homework;
        $homoework->name = request('name');
        $homoework->logo = $path;
        $homoework->outline= request('outlines');
        $course->fees = request('fees');
        $course->during = request('during') ;
        $course->duration = request('duration');

         $course->save();//data INsert

        //Return redirect//5
         return redirect()->route('courses.index');
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
