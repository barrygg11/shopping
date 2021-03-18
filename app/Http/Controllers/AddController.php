<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddController extends Controller
{
    public function addA1(){
        return view('buy');
    }
    public function saveA1(Request $request){
        DB::table('adds')->insert([
            'add1'=>$request->add1,
            'add2'=>$request->add2,
            'add3'=>$request->add3,
            'add4'=>$request->add4
        ]);
        return view('buy');
    }
    public function addList(){
        $adds = DB::table('adds')->simplePaginate(5);
        return view ('addList', ['adds' => $adds]);
    }
}