<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class Authentication extends Controller
{
    public function login(request $request){
         $credentials=$request->only('email','password');
         if(Auth::attempt($credentials)){
            return redirect(route('task.index'));
         }else{
            return redirect()->back()->withError('Credentials are not valid');
         }
    }
}
