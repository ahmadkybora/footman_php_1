<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\App;

class HomeController
{
    public function index()
    {
        $user = User::create([
            'first_name' => 'ghasem',
            'last_name' => 'montazeri',
            'username' => 'kks'
        ]);

        // $user = User::all();
        // $user = User::findById(68);
        // $user->update(68);
        // $user = User::delete(67);
        dd($user);

        $user = new User();
        $user->last_name = "montazeri";
        $user->first_name = "ahmad";
        $user->username = "kybora";
        $user->save();
        dd($user);
        //dd($user->attributes());
        // $b = 
        // [
        //     "helo" => "2",
        //     "b" => "1"
        // ];
        // return json($b);
    }
}