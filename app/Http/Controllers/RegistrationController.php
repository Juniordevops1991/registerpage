<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class RegistrationController extends Controller
{
    public function registration(){
        return view("register");
    }

    public function postRegister(Request $request){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
  

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return view("welcome");
    }

}
