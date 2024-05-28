<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Encryption\Encrypter;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUsersData()
    {
        $userId=Auth::id();
        $Users = User::where('id', $userId)->get();
        return view('layouts.UsersDataPage', compact('Users',));

    }
}
