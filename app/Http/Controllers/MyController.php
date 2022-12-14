<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myDatabase;


class MyController extends Controller{

 public function submit(Request $req){

 $validation = $req->validate([
    'name' => 'required',
    'email' => 'required|max:50|email:rfc,dns',
    'message' => 'required|max:150',
 ]);

$myDatabase = new myDatabase();
$myDatabase->name = $req ->input('name');
$myDatabase->email = $req ->input('email');
$myDatabase->message = $req ->input('message');

$myDatabase->save();
return redirect()->route("first_project")->with('success', 'Submission was completed');

}

public function Show() {
   $myDatabase = new myDatabase();
   return view('first_project', ['data'=>$myDatabase->all()]);
} 

}
