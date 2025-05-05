<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    //----------------------------------------------------------------------------------------------
    

    public function edit(User $user)
    {
        return view('editProfile');
    }

    public function update()
    {
        
    }
}