<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Mentor;
use App\Course;
use App\Degree;
use App\User;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentor=Mentor::All();
        return view('backend.mentors.index',compact('mentor'));
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
        return view('backend.mentors.create',compact('course','degree'));
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

        $user->assignRole('Mentor');

        //validation //2
        $request->validate([
            "name"=>'required|min:5|max:191',
            "email"=>'required',
            "phone"=>'required',
            // "avatar"=>'required|mimes:jpeg,bmp,png',
            "address"=>'required',
            "portfolio"=>'required'
        ]);

        //Upload //3
        if($request->hasfile('avatar'))
        {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/mentor/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = 'storage/mentor/'.$name;
        }

        //Store Data //4
        $mentor=new Mentor;
        $mentor->user_id = $user->id;
        // $mentor->name = request('name');
        // $mentor->email= request('email');
        $mentor->phone = request('phone');
        $mentor->avatar = $path;
        $mentor->degree_id=request('degree');
        $mentor->course_id=request('course');
        $mentor->address = request('address');
        $mentor->portfolio = request('portfolio');

         $mentor->save();//data INsert

        //Return redirect//5
         return redirect()->route('mentors.index');
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
        $mentor=Mentor::find($id);
        $degree=Degree::All();
        $course=Course::All();
        $user=User::All();
        return view('backend.mentors.edit',compact('mentor','degree','course','user'));
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

        $user->assignRole('Mentor');

        //validation //2
        $request->validate([
            // "name"=>'required|min:5|max:191',
            // "email"=>'required',
            "phone"=>'required',
            "avatar"=>'required|mimes:jpeg,bmp,png',
            "address"=>'required',
            "portfolio"=>'required'
        ]);

        //Upload //3
        if($request->hasfile('avatar'))
        {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/mentor/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = 'storage/mentor/'.$name;
        }
        else
        {
            $path = request('oldavatar');
        }

        //Store Data //4
        $mentor=Mentor::find($id);
        $mentor->user_id = $user->id;
        // $mentor->name = request('name');
        // $mentor->email= request('email');
        $mentor->phone = request('phone');
        $mentor->avatar = $path;
        $mentor->degree_id=request('degree');
        $mentor->course_id=request('course');
        $mentor->address = request('address');
        $mentor->portfolio = request('portfolio');

         $mentor->save();//data INsert

        //Return redirect//5
         return redirect()->route('mentors.index');

        //validation //2
        // $request->validate([
        //     "name"=>'required|min:5|max:191',
        //     "email"=>'required',
        //     "phone"=>'required',
        //     "avatar"=>'sometimes|mimes:jpeg,bmp,png',
        //     "address"=>'required'
        // ]);

        //Upload //3
        // if($request->hasfile('avatar'))
        // {
        //     $avatar = $request->file('avatar');
        //     $upload_dir = public_path().'/storage/mentor/';
        //     $name = time().'.'.$avatar->getClientOriginalExtension();
        //     $avatar->move($upload_dir,$name);
        //     $path = 'storage/mentor/'.$name;
        // }
        // else
        // {
        //     $path = request('oldavatar');
        // }

        //Store Data //4
        // $mentor=Mentor::find($id);
        // $mentor->name = request('name');
        // $mentor->email= request('email');
        // $mentor->phone = request('phone');
        // $mentor->avatar = $path;
        // $mentor->degree_id=request('degree');
        // $mentor->course_id=request('course');
        // $mentor->address = request('address');

        //  $mentor->save();//data INsert

        //Return redirect//5
         // return redirect()->route('mentors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor=Mentor::find($id);
        $mentor->delete();

        return redirect()->route('mentors.index');
    }
}
