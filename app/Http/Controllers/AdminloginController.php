<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminloginController extends Controller
{
    public function showLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        DB::connection('mysql');
        $userData = DB::select("SELECT * FROM admins WHERE account=?", [$request->account]);

        if(!isset($accountData[0]->account)){

            return view('login', ['err'=>"帳號不存在"]);

        }elseif(password_verify($request->password, $accountData[0]->password)){

            session(['account' => $accountData[0]->account]);
            return redirect('/admin');

        }else{

            return view('login', ['err'=>"密碼錯誤"]);

        }
    }

    public function logout()
    {
        session()->forget('account');
        return redirect('/admin');
    }
}
