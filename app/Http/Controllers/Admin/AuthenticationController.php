<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    // login 
    public function login()
    {
        return view('auth.login');
    }

    // Authentication check
    public function AuthCheck(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required|min:1'
        ]);
        $credentials  = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Toastr::success('Login successfully');
            return redirect()->intended('dashboard');
        } else {
            Session::flash('errors', 'value');
            return redirect()->route('login');
        }


        // $request->validate([
        //     'username' => 'required|string',
        //     'password' => 'required|min:1',
        // ]);
        // try {
        //     $credentials = $request->only('username', 'password');
        //     if(Auth::attempt($credentials))
        //     {
        //         return redirect()->intended('dashboard');
        //     }
        // } catch (\Throwable $th) {
        //     // return redirect()->route('login')->withInput();
        //     return redirect()->route('login')->with('errors', 'Something is wrong Login field!',$th);
        // }
    }

    // logout 
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    // password change
    public function passwordUpdate(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required',
        ]);
        $has_password = Auth::user()->password;
        if(Hash::check($request->old_password, $has_password))
        {
            if(!Hash::check($request->password, $has_password))
            {
                $user = User::findOrFail(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login');
            }
            else
            {
                return redirect()->back()->withInput();
            }
        }
        else
        {
            // return 'password does not match';
            return redirect()->back()->with('error', 'Password didn\'t match!');

        }
    }
}
