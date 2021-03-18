<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $account = session('account');
        return view('admin.index', ['account' => $account]);
    }
}
