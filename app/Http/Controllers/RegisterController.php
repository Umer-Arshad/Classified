<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        $user_role=UserRole::where('id','<>','1')->get();
        return view('auth.register',compact('user_role'));
    }

    public function store(Request $request)
    {

        $request->validate([

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
        $user=new User();
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->phone_no=$request->phone_no;
        $user->gender=$request->gender;
        $user->user_role_id=$request->user_role_id;
        $user->save();

        auth()->login($user);
        if($user->user_role_id==2){
            return redirect('advertiser_dashboard');
        }elseif($user->user_role_id==3){
            return redirect('customer_dashboard');
        }
    }
}
