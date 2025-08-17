<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{
    public function RegisterPage() {
        return view('Auth.register');
    }

    public function Registerstore(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);
        User::create($data);
        return redirect()->route('index');
    }

    public function Login() {
        return view('Auth.login');
    }

    public function LoginStore(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        if (!$user) {
            return redirect()->route('login');
        }

        return redirect()->route('index');
    }

    public function Logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function Profile(user $user) {
        return view('Auth.profile', compact('user'));
    }


}
