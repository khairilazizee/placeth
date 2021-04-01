<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('form.login');

    }

    public function create(Request $request){

        $data = $request->validate([
            "username" => $request->username,
            "password" => $request->password
        ]);



    }
}
