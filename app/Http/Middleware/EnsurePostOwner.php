<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post;

class EnsurePostOwner
{
    public function handle(Request $request, Closure $next): Response
    {
        
        $post = $request->route('post'); 

        if ($post->user_id !== auth()->id()) {
            return abort(403, 'You are not authorized to access this post.');
        }

        return $next($request);
    }
}
