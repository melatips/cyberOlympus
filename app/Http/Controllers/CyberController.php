<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\BasicInfo;

class CyberController extends Controller
{
    public function landingpage(){
    	$basic = BasicInfo::first();
    	return view('landing-page')
    			->with('basic', $basic);
    }

    public function totalImaging(){
    	return view('360-total-imaging');
    }

    public function feature1(){
    	return view('feature.fully-responsive');
    }

    public function feature2(){
    	return view('feature.content-management');
    }

    public function feature3(){
    	return view('feature.unique-design');
    }

    public function feature4(){
    	return view('feature.custom-feature');
    }

    public function contactSubmit(Request $request){
    	$contactSave = new Contact;
    	$contactSave->c_username = $request->name;
    	$contactSave->topic      = $request->topic;
        $contactSave->message    = $request->message;
    	$contactSave->c_email    = $request->email;
    	$contactSave->c_phone    = $request->phone;

    	$contactSave->save();
        // return back()
        //         ->with('status', 'Success');
    	// return redirect('/#contact');

    }


    public function coba(Request $request){
        $data = array('status'=>true, 'message'=>'success');
    return $data;
}
    }
    
