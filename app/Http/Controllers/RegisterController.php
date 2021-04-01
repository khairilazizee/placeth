<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

        return view('form.register');

    }

    public function create(Request $request){

    }
}
