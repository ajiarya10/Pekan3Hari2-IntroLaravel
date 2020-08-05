<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view("Register");
    }

    public function proses(Request $request){
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');;
    $gender;
    $nationality;
    $bahasa;

    return view('welcome',['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
