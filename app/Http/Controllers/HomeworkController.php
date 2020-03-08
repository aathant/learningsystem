<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assignment;
use App\Homework;
use App\User;
class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homework=Homework::All();
        $user=User::All();
        return view('frontend.group',compact('homework','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::All();
        return view('backend.homeworks.create',compact('user'));
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
            "post"=>'required|min:1|max:191',
        ]);
 
        //Store Data //4
        $user=Auth::User();
        // dd($user);
        $homework=new Homework;
        $homework->post = request('post');
        $homework->marks= 0;
        $homework->start_time= 0;
        $homework->end_time= 0;
        $homework->user_id= $user->trainer->id;
        $homework->user_id= $user->mentor->id;
        $homework->user_id= $user->student->id;
        // $homework->user_id= $user->trainer->id;

         $homework->save();//data INsert

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
        $homework=Homework::findOrFail($id);
        return view('frontend.group',compact('homework'));
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
