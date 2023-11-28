<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLoginPage(){
        return view('auth.login');
    }
 public function regsterPage(){
    return view('auth.signup');
 }


    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials , true)) {
            return redirect(route('main'))->with("success","Welcome Back!"); // Redirect to the intended page
        } else {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }

    public function regester(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'phone'=> 'required|min:11|max:11',
            'email'=> 'required|email',
            'password'=> 'required',
            'cpassword'=> 'same:password',
            ]);
        $user = Auth::user();
            if (!$user) {
        User::create($credentials);

        session()->flash("message","You Signup seccsfully");
        return redirect(route('main'));
// }else {
//     return back()->withErrors([
//         'email' => 'Invalid credentials',
//     ]);
}

    }
}
