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
}
