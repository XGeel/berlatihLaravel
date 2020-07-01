<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function form(){
        return view('form');
    }

    public function welcome_user(Request $request){
        //dd($request->all());
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welcome',['fname' => $fname , 'lname' => $lname]);
    }
}