<?php

namespace App\Http\Controllers;

use App\Http\Requests\Poster\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        return new PostResource(Post::create($request->validated()));
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json();
    }
}
