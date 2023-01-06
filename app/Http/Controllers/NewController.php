<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewController extends Controller
{
    public function teacherRegister(){
        return view('auth.teacherRegister');
    }

    protected function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'confirmpassword'=>'required|min:8',
            // 'confirmpassword' => 'required|min:8|same:password',
        ]);
       
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $pass1=$request->password;
        $pass2=$request->confirmpassword;
        if($pass1 == $pass2) {
            $data->password = Hash::make($pass1);
        }
        else {
            return ["result"=>"operation failed"];
        }
        $data->type =2;
        $data->save();
        return redirect('/login');

    }
}
