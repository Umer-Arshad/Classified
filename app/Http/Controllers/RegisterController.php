<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserRole;

class RegisterController extends Controller
{
    public function create()
    {
        $user_role=UserRole::where('id','<>','1')->get();
        return view('auth.register',compact('user_role'));
    }

    public function store()
    {

        $attributes = request()->validate([

//            'username' => 'required|max:255|min:2',
            'firstname'=>'required|max:50|min:3',
            'lastname'=>'required|max:50|min:3',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required',
            'gender'=>'required',
            'phone_no'=>'required',
            'user_role_id'=>'required',

        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/dashboard');
    }
}
