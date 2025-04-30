<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $posts = Post::all();
        return view('homePage' ,compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content'=>'required'
        ]);
        $imagePath = $request->file('image')->store('posts','public');

        Post::create([
            'title'=>$request->title,
            'image'=>$imagePath,
            'content'=>$request->content
        ]);

        return redirect()->route('homePage')->with('success','Post created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('showPost' ,compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('editPost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content'=>'required'
        ]);
        $imagePath = $request->file('image')->store('posts','public');

        $post->update([
            'title'=>$request->title,
            'image'=>$imagePath,
            'content'=>$request->content
        ]);

        return redirect()->route('homePage')->with('success','Post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('homePage')->with('success', 'Post deleted');
    }
}
