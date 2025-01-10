<?php

use Illuminate\Support\Facades\Route;

function getUsers(){
        
    return  [
        1 => ['name'=>'ashok','phone'=>'1111111111','city'=>'delhi'],
        2 => ['name'=>'saurabh','phone'=>'1111111110','city'=>'haydrabad'],
        3 => ['name'=>'rahul','phone'=>'1111111119','city'=>'srinager'],
        4 => ['name'=>'vipin','phone'=>'1111111118','city'=>'mumbai'],
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',function(){
    //  $name = " ashok Singh negi";
    $names = getUsers();


    return view('users',['user'=>$names]);
    
    
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


Route::get('/user/{id}',function($userid){
    $users = getUsers();
     abort_if(!isset($users[$userid]), 404);


    $user = $users[$userid];

  return view('user',['id'=>$user]);
})->name('view.user');