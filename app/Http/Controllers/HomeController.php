<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\App;

class HomeController
{
    public function index()
    {
        $user = new User();
        $user->id = 1;
        $user->username = "a";
        // dd($user);
        $user->save();

        //dd($user->attributes());
        // $b = 
        // [
        //     "helo" => "2",
        //     "b" => "1"
        // ];
        // return json($b);
    }
}