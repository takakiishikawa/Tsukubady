<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;


class NiceListController extends Controller
{
    public function index(){
        return view('');

    }

    public function engineerNiceList(){
        $nices=Nice::all();
        return view('engineer.top.nice-list')
                ->with('nices',$nices);
    }
}
