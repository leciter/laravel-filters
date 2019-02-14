<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('info');


        if($request->has('name')){

            $users->where('name', 'like', "%$request->name%");
        }

        if(($request->has('is_active')) && ($request->is_active > 0)){

            $users->where('is_active', $request->is_active);
        }

        if(($request->has('gender')) && ($request->gender > 0)){

            $users->where('gender', $request->gender);
        }

        if(($request->has('birthday')) && ($request->birthday)){

            $users->whereHas('info', function ($query) use($request){

                $query->where('birthday', '>', $request->birthday);
            });
                
        }


        $users = $users->get();

        return view('users.index', compact('users'));
    }


}
