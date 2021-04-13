<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){

        return view('form.login');

    }

    public function create(Request $request){

        $data = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        // check
        $check = User::where(["email"=>$request->email]);
        $exists = $check->exists();

        if($exists > 0){
            $row = $check->first();
            $password = $row->password;
            if(Hash::check($request->password.$request->email, $password)){

                Auth::login($row, $request->remember);

                session(["access"=>1,"email"=>$request->email,"name"=>$row->name, "role"=>$row->role]);

                if($row->role==99){
                    return redirect("admin");
                } else {
                    return redirect("/");
                }

                
            } else {
                return redirect("login")->with(["status"=>"Access Denied."]);
            }
        } else {
            return redirect("login")->with(["status"=>"Access Denied."]);
        }
    }
}
