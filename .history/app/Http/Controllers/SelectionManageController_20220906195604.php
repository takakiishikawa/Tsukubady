<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNice;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;



class SelectionManageController extends Controller
{
    public function corporateSelectionName(){
        $both_nices=BothNice::where('name',Auth::user()->name)->get();
        return view('corporate.top.selection',['both_nices'=>$both_nices]);
    }
    public function engineerSelectionName(){
        $both_nices=BothNice::where('engineer_name',Auth::user()->engineer_name)->get();
        return view('engineer.top.selection',['both_nices'=>$both_nices]);
    }

    public function corporateSelectionMessage(Request $request){
        return redirect()->route('corporate.top.selection');
    }

}
