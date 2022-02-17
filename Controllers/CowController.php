<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CowController extends Controller
{
    public function all(){
        return view('cows.all');
    }

    public function add(){
        return view('cows.add');
    }

    public function save(Request $request){
        dd('here');
    }
}
