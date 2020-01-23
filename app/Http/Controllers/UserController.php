<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class UserController extends Controller
{
    public function save(Request $request){
    	$data=new student();
    	$data->name=$request->name;
    	$data->email=$request->email;
    	$data->password=$request->password;
    	$data->address=$request->address;
    	
    	// return redirect('/read');
    	if($data->save()) {
    		$response["status"] = "success";
    	}
    	else {
    		$response["status"] = "failure";

    	}
    	return $response;
    }

    public function read(){
    	$data=student::all();
    	return view('student_table',compact('data'));

    }
    public function edit(Request $request,$id){
    	$data=student::where('id',$id)->first();
    	return view('/edit', compact('data'));
    }


    public function update(Request $request, $id){
    	$data= student::find($id);
    	$data->name=$request->name;
    	$data->email=$request->email;
    	$data->password=$request->password;
    	$data->address=$request->address;
    	$data->save();
    	return redirect('/read');
    }


}
