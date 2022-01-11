<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $username)
    {
        // $data = [
        //     'username' => $request->username
        // ];
        return view('profile', compact('username'));
    }
}
