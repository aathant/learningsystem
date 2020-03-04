<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;


class ValidationController extends Controller
{

    
    public function formValidation()
    {
    	return view('form-validation');
    }


    public function formValidationPost(Request $request)
    {
    	$this->validate($request,[
    		"name"=>'required|min:5|max:191',
            "logo"=>'required|mimes:jpeg,bmp,png',
            "outlines"=>'required',
            "fees"=>'required',
            "during"=>'required|min:5|max:191',
            "duration"=>'required|min:5|max:191'
    		],[
    			'name.required' => ' The name field is required.',
    			'logo.required' => ' The logo field is required.',
    			'outlines.required' => ' The outline field is required.',
    			'fees.required' => '  The fees field is required.',
    			'during.required' => ' The during field is required.',
    			'duration.required' => ' The duration field is required.',
    		]);


    	//dd('You are successfully added all fields.');
    }
}
