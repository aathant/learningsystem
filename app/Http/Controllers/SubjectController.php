<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Trainer;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct($value='')
    // {
    //     $this->middleware('auth')->except('store');
    // }

    public function index()
    {
        $subject=Subject::All();
        $trainer=Trainer::All();
        return view('backend.subjects.index',compact('subject','trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $trainer=Trainer::All();
        return view('backend.subjects.create',compact('trainer'));
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
        $request->validate(["name"=>'required']);
        $request->validate(["pdf"=>'required']);
        $request->validate(["trainer"=>'required']);

        
        if($request->hasfile('logo'))
        {
            $logo = $request->file('logo');
            $upload_dir = public_path().'/storage/subject/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($upload_dir,$name);
            $path = 'storage/subject/'.$name;
        }
        //store data
        $subject=new Subject;
        $subject->name = request('name');
        $subject->pdf_link = request('pdf');
        $subject->trainer_id=request('trainer');
        $subject->logo=request('logo');
        $subject->description=request('description');

        //data Insert
        $subject->save();

        //return redirect
        return redirect()->route('subjects.index');
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
        $subject=Subject::find($id);
        $trainer=Trainer::all();
        return view('backend.subjects.edit',compact('subject','trainer'));
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
        $request->validate(["name"=>'required']);
        $request->validate(["pdf"=>'required']);
        $request->validate(["name"=>'required']);

         //Upload //3
        if($request->hasfile('logo'))
        {
            $logo = $request->file('logo');
            $upload_dir = public_path().'/storage/course/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($upload_dir,$name);
            $path = 'storage/course/'.$name;
        }
        else
        {
            $path = request('oldlogo');
        }
        //store data
        $subject=Subject::find($id);
        $subject->name = request('name');
        $subject->pdf_link = request('pdf');
        $subject->trainer_id=request('trainer');
        $subject->logo=request('logo');
        $subject->description=request('description');

        //data Insert
        $subject->save();

        //return redirect
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject=Subject::find($id);
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
