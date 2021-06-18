<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
class Login extends Controller
{
    //

public function login_form(){


    return view('Admin.login');
}


public function login_submit(request $request){


//   $data = User::create([


// 'password' => Hash::make(request('password')),
// //'password' => request('password'),
// 'email' => request('email'),

// //'role' => request('2'),

// ]);
// $data->save();

$credentials = $request->only('email', 'password');


          if (Auth::attempt($credentials)) {


return redirect('index');
          }


else{

    return "false";
}

}

}
