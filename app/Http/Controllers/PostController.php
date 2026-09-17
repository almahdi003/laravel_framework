<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $All_Posts = [

            ['ID' => 1, 'Title' => 'First Post', 'Posted By' => 'Ali', 'Created At' => '2026-09-10'],
            ['ID' => 2, 'Title' => 'Second Post', 'Posted By' => 'Mohamed', 'Created At' => '2026-09-11'],
            ['ID' => 3, 'Title' => 'Third Post', 'Posted By' => 'Ahmed', 'Created At' => '2026-09-12'],
        ];
        return view('posts.index', ['Posts' => $All_Posts]);
    }

    public function show($postId)
    {
        $show_post = ['ID' => 1, 'Title' => 'PHP', 'Description' => 'the best language for backend'];
        $users    = ['Name' => 'Ali', 'Email' => 'ali@gmail.com', 'Created At' => '2026-09-10'];

        return view('posts.show', ['post' => $show_post, 'user' => $users]);
    }

    public function create()
    {
        $new_post = ['ID' => 1, 'Title' => 'PHP', 'Description' => 'the best language for backend'];
        return view('posts.create', ['post' => $new_post]);
    }

    public function store()
    {
        $data =request()->all();

        // $title = request()->title;
        // $description = request()->description;
        // $posted_by = request()->posted_by;
        // dd($data, $title, $description, $posted_by);

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
