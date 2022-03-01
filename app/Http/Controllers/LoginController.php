<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Auth;
use Cookie;


class LoginController extends Controller
{


    public function signUp()
    {
        $role = session('role');
        if ($role) {
            return view('pages.signUp', compact('role'));
        } else {
            $role = 'guest';
            return view('pages.signUp', compact('role'));
        }
    }



    public function signUpUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);
        try {
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            Session::flash('message', 'Patient Successfully created!');
            Session::flash('class', 'success');
            return redirect()->route('signIn');
        } catch (Exception $e) {
            Session::flash('message', 'Patient is not created!');
            Session::flash('class', 'danger');
            return redirect()->route('signUp');
        }
    }
    public function signIn()
    {

        $role = session('role');
        if ($role) {
            return view('pages.signIn', compact('role'));
        } else {
            $role = 'guest';
            return view('pages.signIn', compact('role'));
        }
    }


    public function signInUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        try {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                if ($user->password == $request->password) {
                    Session::put('user', $user);
                    Session::flash('message', 'Successfully login!');
                    Session::flash('class', 'success');
                    $request->session()->put('role', $user->role);
                    // $request->session()->put('userID', $user->id);
                    return redirect()->route('home');
                } else {
                    Session::flash('message', 'Password is incorrect!');
                    Session::flash('class', 'danger');
                    return redirect()->route('signIn');
                }
            } else {
                Session::flash('message', 'Email is incorrect!');
                Session::flash('class', 'danger');
                return redirect()->route('signIn');
            }
        } catch (Exception $e) {
            Session::flash('message', 'Email is incorrect!');
            Session::flash('class', 'danger');
            return redirect()->route('signIn');
        }
    }




    public function signOut(Request $request)
    {
        $request->session()->forget('role');
        Session::flash('message', 'Successfully signOut!');
        Session::flash('class', 'danger');
        return redirect()->route('home');
    }
}
