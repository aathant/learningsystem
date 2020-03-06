<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Batch;
use App\Student;

class BatchController extends Controller
{
    public function show_batch($value='')
    {
        $course=request('id');
        //dd($batch);
        $batch=Batch::where('course_id','=',$course)
                        ->get();
                        // dd($batch);
        return $batch;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batch=Batch::all();
        return view('backend.batches.index',compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();
        return view('backend.batches.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate(["title"=>'required|min:5|max:191',
                            "startdate"=>'required',
                            "enddate"=>'required',
                            "time"=>'required']);
        //store data
        $batch=new Batch;
        $batch->title = request('title');
        $batch->startdate = request('startdate');
        $batch->enddate = request('enddate');
        $batch->time = request('time');
        $batch->course_id = request('course');
        //insert
        $batch->save();

        //redirect
        return redirect()->route('batches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return view('backend.batches.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $batch=Batch::find($id);
        $course=Course::all();
        return view('backend.batches.edit',compact('batch','course'));
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
        //validation
        $request->validate(["title"=>'required|min:5|max:191',
                            "startdate"=>'required',
                            "enddate"=>'required',
                            "time"=>'required']);
        //store data
        $batch=Batch::find($id);
        $batch->title = request('title');
        $batch->startdate = request('startdate');
        $batch->enddate = request('enddate');
        $batch->time = request('time');
        $batch->course_id = request('course');
        //insert
        $batch->save();

        //redirect
        return redirect()->route('batches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $batch=Batch::find($id);
       $batch->delete();

       return redirect()->route('batches.index');
    }
}
