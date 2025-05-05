<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    //
    public function edit(User $user)
    {
        return view('editProfile');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}