<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/posts');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');

        $post->save();

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }

    public function create()
    {
        return view('posts.create');
    }
}
