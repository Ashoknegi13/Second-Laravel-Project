<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',function(){
     $name = " ashok Singh negi";
    
    return view('users',[
                       'user'=>$name,
                       'city'=>''
                    ]);
    
    
     // return view('users')
    // ->withUser($name)
    // ->withCity('Delhi');
 
 
 
     // return view('users')
    // ->with('user',$name)
    // ->with('city','rudraprayag');

 
  
    // return view('users',['user'=>$name,
    //                       'city'=>'<script>alert("Rudraprayag");</script>'
    //                     ]);
});   // this si users route brackets
