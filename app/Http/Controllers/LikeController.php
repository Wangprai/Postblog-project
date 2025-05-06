<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function like(Post $post)
    {
        $user = auth()->user();
        if (!$user->likedPosts->contains($post)) {
            $user->likedPosts()->attach($post->id);
        }

        return back();
    }

    public function unlike(Post $post)
    {
        $user = auth()->user();

        if ($user->likedPosts->contains($post->id)) {
            $user->likedPosts()->detach($post->id);
        }

        return back();
    }

    public function showLikePost()
    {
        $likedPosts = auth()->user()->likedPosts; 
        return view('likedPost', compact('likedPosts'));
    }

}
