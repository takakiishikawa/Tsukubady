<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\SelectionStage;




class CorporateController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::user()->id;
        $selection_flows=SelectionFlow::where('user_id',$user_id)->get();

        //いいね数など
        $nices=Nice::where('name',Auth::user()->name)->where('type',"企業")->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type',"エンジニア")->get();
        $both_nices=BothNice::where('name',Auth::user()->name)->get();

        //$selection_stages1=SelectionStage::where('selection_flow_id',Auth::user()->selection_flow->id)->where('selection_stage',"面談")->get();
        //$selection_stages2=SelectionStage::where('selection_flow_id',Auth::user()->selection_flow->id)->where('selection_stage',"採用")->get();

        return view('corporate.top')
                ->with('selection_flows',$selection_flows)
                ->with('nices',$nices)
                ->with('niceds',$niceds)
                ->with('both_nices',$both_nices)
                ->with('selection_stages1',$selection_stages1)
                ->with('selection_stages2',$selection_stages2);

    }


}

