<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Student;
use App\Skill;
use App\User;
use App\Batch;
use Illuminate\Support\Facades\URL;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct($value='')
    {
        $this->middleware('auth')->except('store');
    }
    public function index()
    {
        $student = Student::All();
        $user=User::All();
        return view('backend.students.index',compact('student','user'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill=Skill::All();
        $batches=Batch::All();
        return view('backend.students.create',compact('skill','batches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User;
        $user->name=request('ename');
        $user->email=request('email');
        $user->password=Hash::make('123456789');
        $user->save();

        $user->assignRole('Student');
        $request->validate([
                "ename"=>"required|min:3|max:191",
                "mname"=>"required|min:3|max:191",
                "email"=>"required",
                "phone"=>"required",
                "address"=>"required|min:3|max:191",
                "education"=>"required|min:3|max:191",
                "city"=>"required|min:3|max:191",
                "year"=>"required|min:3|max:191",
                "date"=>"required",
                "gender"=>"required",
                // "check"=>"required",
                "parent"=>"required|min:3|max:191",
                "ph"=>"required",
                "relation"=>"required|min:3|max:191",
                "parent1"=>"required|min:3|max:191",
                "ph1"=>"required",
                "relation1"=>"required|min:3|max:191",
                "because"=>"required",
                "bid"=>"required"
            ]);

        $student=new Student();
        $student->user_id = $user->id;
        // $student->namee = request('ename');
        $student->namem = request('mname');
        // $student->email = request('email');
        $student->phone = request('phone');
        $student->address = request('address');
        $student->education = request('education');
        $student->city = request('city');
        $student->accepted_year = request('year');
        $student->dob = request('date');
        $student->gender=request('gender');
        $student->p1 = request('parent');
        $student->p1_phone = request('ph');
        $student->p1_relationship = request('relation');
        $student->p2 = request('parent1');
        $student->p2_phone=request('ph1');
        $student->p2_relationship = request('relation1');
        $student->because = request('because');
        $student->batch_id = request('bid');
        $student->save();

        $student->skills()->attach(request('skills'));

        //return
        if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=='students.create')
        {
            return redirect()->route('students.index');
        }
        else
        {
            //return back with noti msg
            return back()->with('status','Register successfully!');
        }

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.students.edit');
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
    public function show_student($value='')
    {
        $batch=request('id');
        //dd($batch);
        $student=Student::where('batch_id','=',$batch)
                        ->get();


        // dd($student);
                        //dd($student);
        return $student;
    }
}
