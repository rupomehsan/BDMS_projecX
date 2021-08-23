<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class loginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function create()
    {
        $data = request()->validate([
            'email' => 'required|exists:users',
            'password' => 'required|min:5'
        ]);


        if (!Auth::attempt($data)) {
            return redirect()->back()->with('error', 'Credentials not matched');
        }

        return redirect('/')->with('message', ' successfully Login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
