<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;

class ShopsController extends Controller
{
    public function show()
    {
        $data = shop::all();
        return view('shop',['shops'=>$data]);
    }
}
