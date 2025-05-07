<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Authenticatable;
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
        $user = auth()->user();
        return view('editProfile', compact('user'));
    }

    public function update(Request $request, User $user)
    {   

        $request->validate([
            'username'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'gender'=>'required',
        ]);

        $user->update([
            'username'=>$request->username,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'gender'=>$request->gender,
        ]);

        return redirect()->route('profile')->with('success', 'Edit profile success');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('home')->witn('success', 'User deleted');
    }
}