<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function countUsers()
    {
        return User::count();
    }

    public function listUsers()
    {
        return User::select("username")->get();
    }
}
