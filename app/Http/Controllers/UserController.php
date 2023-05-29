<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $users = User::search($request->keyword)->paginate(10);
        } else {
            $users = User::select('name', 'email', 'role_name', 'email_verified_at')->paginate(10);
        }

        return view('users.index', compact('users'))->with('no', 1);
    }
}
