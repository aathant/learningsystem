<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trainers=Trainer::All();
        return view('frontend.sub_home',compact('trainers'));
    }
}
