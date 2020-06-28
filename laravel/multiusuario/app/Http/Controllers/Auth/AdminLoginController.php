<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ]

        Auth::guard('admin');
        
        ->attempt($credentials, $request->remember);

        if ($isOk) {
            return redirect()->intended(route('admin.dashboard'));
        } 

        return redirect()->back()->withInput($credentials, $request->remember);
    }
    

    public function index()
    {
        return view('auth.admin-login');
    }
}
