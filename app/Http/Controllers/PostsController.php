<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'max:50'],
            'body' => ['required'],
        ];

        $this->validate($request, $rules);

        Post::create([
            'name' => $request['name'],
            'body' => $request['body'],
        ]);

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $rules = [
            'name' => ['required', 'max:50'],
            'body' => ['required'],
        ];

        $this->validate($request, $rules);

        $post->update([
            'name' => $request['name'],
            'body' => $request['body'],
        ]);

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
