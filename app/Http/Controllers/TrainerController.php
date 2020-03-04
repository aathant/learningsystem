<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request; 
use App\Trainer;
use App\Course;
use App\Degree;
use App\User;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer=Trainer::all();
        return view('backend.trainers.index',compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course=Course::All();
        $degree=Degree::All();
        return view('backend.trainers.create',compact('course','degree'));
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
        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make('123456789');
        $user->save();

        $user->assignRole('Trainer');

        //validation //2
        $request->validate([
            "name"=>'required|min:5|max:191',
            "email"=>'required',
            "phone"=>'required',
            "avatar"=>'required|mimes:jpeg,bmp,png',
            "address"=>'required',
            "portfolio"=>'required'
        ]);

        //Upload //3
        if($request->hasfile('avatar'))
        {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/trainer/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = 'storage/trainer/'.$name;
        }

        //Store Data //4
        $trainer=new Trainer;
        $trainer->user_id = $user->id;
        // $trainer->email= request('email');
        $trainer->phone = request('phone');
        $trainer->avatar = $path;
        $trainer->degree_id=request('degree');
        $trainer->course_id=request('course');
        $trainer->address = request('address');
        $trainer->portfolio = request('portfolio');

         $trainer->save();//data INsert

        //Return redirect//5
         return redirect()->route('trainers.index');
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
        $trainer=Trainer::find($id);
        $degree=Degree::All();
        $course=Course::All();
        $user=User::find($id);
        return view('backend.trainers.edit',compact('trainer','degree','course','user'));
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
        $user=User::find($id);
        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make('123456789');
        $user->save();

        $user->assignRole('Trainer');
        //validation //2
        $request->validate([
            "name"=>'required|min:5|max:191',
            "email"=>'required',
            "phone"=>'required',
            "avatar"=>'sometimes|mimes:jpeg,bmp,png',
            "address"=>'required',
            "portfolio"=>'required'
        ]);

        //Upload //3
        if($request->hasfile('avatar'))
        {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/trainer/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = 'storage/trainer/'.$name;
        }
        else
        {
            $path = request('oldavatar');
        }

        //Store Data //4
        $trainer=Trainer::find($id);
        $trainer->user_id = $user->id;
        $trainer->phone = request('phone');
        $trainer->avatar = $path;
        $trainer->degree_id=request('degree');
        $trainer->course_id=request('course');
        $trainer->address = request('address') ;
        $trainer->portfolio = request('portfolio');

         $trainer->save();//data INsert

        //Return redirect//5
         return redirect()->route('trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer=Trainer::find($id);
        $trainer->delete();

        return redirect()->route('trainers.index');
    }
}
