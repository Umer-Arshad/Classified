<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
//        $input = $request->all();
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'min:8|max:9|required',
        ]);

//        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (Auth::attempt($credentials, $request->remember)) {
            if (auth()->user()->user_role_id == 1) {
                return redirect()->route('home');
            }
            elseif (auth()->user()->user_role_id == 2) {
                return redirect()->route('advertiser_dashboard');
            }
            elseif (auth()->user()->user_role_id == 3) {
                return redirect()->route('customer_dashboard');
            }
            elseif (auth()->user()->user_role_id == 4) {
                return redirect()->route('visitor_dashboard');
            } else{
                return 'Wrong input';
            }
        }
         else{
                return redirect()->route('login')
                    ->with('error','Email-Address And Password Are Wrong.');
            }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
