<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'data' => user::get()
        ];
        return view('user.index', $data);
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }
}
