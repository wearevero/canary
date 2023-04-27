<?php

namespace App\Http\Controllers;
use App\Models\User;
use GuzzleHttp\Psr7\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email')->cursor();
        return view('users.index', compact('users'))->with('no', 1);
    }
}
