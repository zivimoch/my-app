<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use App\Models\User;

use Illuminate\Support\Facades\Hash; //untuk check password
use Illuminate\Support\Facades\Auth; //untuk bikin sessin
use Illuminate\Validation\ValidationException; //kalo ada yang salah di if if an nya

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {

        if (Auth::attempt($request->only('email', 'password'))) { //$request only tuh sama aja kayak ['email' => $request->email, 'password' => $request->password]. Atau validasinya taro disini aja gk usah ditaro di request, karna kan juga cuman di pake di sini. beda kyk misalnya validasi lain. Nah kalo validasinya disini, maka isi dari attempt adalah array validasinya.
            return redirect("/");
        }

        throw ValidationException::withMessages([
            'email' => 'Email ato Password Salah!'
        ]);
        
    }
}
