<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
       // $roles = Role::all();//->toArray();
        //dd($roles);
        //$users = User::all();
        $users = User::with('Role')->get();
        return view('usersviews', compact('users'));
    }

}
