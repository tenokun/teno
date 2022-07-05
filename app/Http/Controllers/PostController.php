<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Post;
use App\Http\Requests\PostRequest;
=======
use App\post;
>>>>>>> 25285e80d02e3cb475f2a88136cab6e045dffb53
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
<<<<<<< HEAD
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
=======
        return $post->get();
>>>>>>> 25285e80d02e3cb475f2a88136cab6e045dffb53
    }
}
