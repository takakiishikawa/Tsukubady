<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\JobInfo;



class JobInfoController extends Controller
{

    public function register(Request $request){
        return view('corporate.top.corporate-info-register',[]);
    }
    public function display(){

    }
    public function update(){

    }
}