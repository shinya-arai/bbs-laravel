<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'post_id' => ['required'],
            'body' => ['required'],
        ];

        $params = $request->validate($rules);

        $post = Post::find($params['post_id']);
        $post->comments()->create($params);

        return redirect('/posts/show/' . $post->id);
    }

    public function destory(Comment $comment)
    {
        $comment->delete();

        return redirect('/posts/show/' . $comment->post_id);
    }
}
