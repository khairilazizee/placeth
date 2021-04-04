<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('form.register');

    }

    public function create(Request $request){

        $data = $request->validate([
            "email" => "required|email",
            "password" => "required|confirmed",
            "name" => "required",
        ]);

        // check email dalam db
        $check = User::where(["email"=>$request->email]);
        $exists = $check->exists();
        
        // kalau dah exists, redirect ke login page
        if($exists > 0){
            return redirect("login")->with(["status"=>"Email already exists. Please log in or recover password."]);
        } else {
            // simpan details registration
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password.$request->email);
            $user->save();

            $iduser = $user->id;

            $people = new People();
            $people->user_id = $iduser;
            $people->email = $request->email;
            $people->save();

            return redirect("login")->with(["status"=>"Registration success. Please login."]);

        }

    }
}
