<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CadastroController extends Controller
{
    public function index()
    {
        return view('pages.login.cadastro.index');
    }
    public function createUser()
    {
        User::create($this->requestValidate());
        return redirect(route('login.login'));
    }
    public function requestValidate()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'email',
            'secondName' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
    }
}
