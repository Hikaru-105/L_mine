<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        /*
        $test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql();
        dd($test);
        db文確認用
        */
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(3)]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
}
