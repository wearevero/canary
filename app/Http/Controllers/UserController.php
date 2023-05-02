<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'email_verified_at')->cursor();

        return view('users.index', compact('users'))->with('no', 1);
    }
}
