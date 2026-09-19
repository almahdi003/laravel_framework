<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

// use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();

        return view('posts.index', ['Posts' => $postsFromDB]);
    }

    public function show(Post $post)
    {
        // dd($post);

        // $singlePostFromDB = Post::find($postId); 
        // $singlePostFromDB = Post::findOrFail($postId); // use to if bag is not fuond

        // if (is_null($singlePostFromDB)){
        //     return to_route('posts.index');
        // }

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        // select * from users
        $userFromDB = User::all();

        return view('posts.create', ['users' => $userFromDB]);
    }

    public function store()
    {
        $data =request()->all();

        $title = request()->title;
        $description = request()->description;
        $posted_by = request()->posted_by;

        $post = new Post;

        $post->title       = $title;
        $post->description = $description;

        $post->save();

        return to_route('posts.index');
    }

    public function edit($postId)
    {
        return view('posts.edit');
    }

    public function update($postId)
    {

        $title = request()->title;
        $description = request()->description;
        $posted_by = request()->posted_by;

        // dd($title, $description, $posted_by);

        return to_route('posts.show',1);
    }

    public function destroy($postId)
    {
        return to_route('posts.index');
    }

}
