<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login()
    {
        return  view("auth.login");
    }

    public function post_login(Request $request)
    {
        $formData = $request->validate([
            "email" => ["required", "email", Rule::exists("users", "email")],
            "password" => ["required", "min:8"],
        ]);

        if (auth()->attempt($formData)) {
            return redirect(route("home"));
        }

        return back()->withErrors([
            "email" => "Your credentials is wrong!"
        ]);
    }

    public function register()
    {
        return  view("auth.register");
    }

    public function post_register(Request $request)
    {
        $formData = $request->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "email", Rule::unique("users", "email")],
            "phone" => ["required", "min:8", Rule::unique("users", "phone")],
            "password" => ["required", "min:8"],
        ]);

        User::create($formData);

        return redirect(route("home"));
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route("login"));
    }
}
