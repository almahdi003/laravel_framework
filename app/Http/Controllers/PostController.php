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

        return view('posts.index', ['posts' => $postsFromDB]);
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

        $data = request()->all();

        $title       = request()->title;
        $description = request()->description;
        $posted_by   = request()->posted_by;


        // $post = new Post;
        // $post->title       = $title;
        // $post->description = $description;
        // $post->save();

        // the other way
        Post::create([
            'title'       => $title,
            'description' => $description,
            'user_id'     => $posted_by
        ]);

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        $user = User::all();

        return view('posts.edit', ['users' => $user, 'post' => $post]);
    }

    public function update($postId)
    {

        $title       = request()->title;
        $description = request()->description;
        $posted_by   = request()->posted_by;

        $singlePostFromDB = Post::find($postId);

        $singlePostFromDB->update([
            'title'       => $title,
            'description' => $description,
            'user_id'     => $posted_by
        ]);

        return to_route('posts.show', $postId);
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);

        $post->delete();

        return to_route('posts.index');
    }
}
