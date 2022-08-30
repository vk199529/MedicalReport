<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator, Auth;
class AdminController extends Controller
{
   public function authenticate(Request  $rerquest){
       $this->validate($rerquest,[
        'email' => 'required|email',
        'password' => 'required'
       ]);
       if(Auth::guard('admin')->attempt(['email' => $request->email 'password' => $password],
       $request->get('remember'))) {
        return redirect()->route('admin.dashboard');
       }else{
        session()->flash('error','Either Email'/'password is incorrect');
        return redirect()->withInput($request->only('email'));
       }

   }
}
