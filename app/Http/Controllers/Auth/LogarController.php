<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LogarController extends Controller
{
    public function login()
    {
        return view("pages.login.index");
    }
    public function autentication(Request $request)
    {
        $user  = User::where("email", request("email"))->first();
        $password  = User::where("password", request("password"))->first();

        if (!$user || !$password) {
            dd("tem coisa errada ai pacero");
        } else {
            auth()->login($user, $request->has("remember"));
            return redirect(route('user.profile'));
        }
    }
    public function requestValidate()
    {
        return request()->validate([
            "email" => "required|string",
            "password" => "required|string"
        ]);
    }
    public function Logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
