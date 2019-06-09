<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Stoyan extends Controller
{
    //
   public function about(){

    $firstName="Stoyan";
    $lastName="Shivarov";
    $email="ss100yan@gmail.com";
    return view('about' , compact('firstName','lastName','email'));

   }

   public function index (){

    $firstName="Stoyan";
    $lastName="Shivarov";
    $email="ss100yan@gmail.com";
    return view('welcome' , compact('firstName','lastName','email'));

   }

   public function test (){

    $TestVariable1="TestVariablePassing";
    $TestVariable2="TestVariablePassing2";
    return view('Test', compact('TestVariable1','TestVariable2'));

   }


}
