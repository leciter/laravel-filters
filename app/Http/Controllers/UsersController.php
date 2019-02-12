<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('Info')->get();

        return view('users.index', compact('users'));
    }
}
