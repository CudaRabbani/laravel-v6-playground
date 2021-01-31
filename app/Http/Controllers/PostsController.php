<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    private $posts = [
        'my-first-post' => "Hello This is my first post",
        'my-second-post' => "This is my second post"
    ];

    public function show($post)
    {
        if (!array_key_exists($post, $this->posts)) {
            abort (404, 'No relavent posts found');
        }

        return view('posts', [
            'post' => $this->posts[$post] ?? "No posts available for view"
        ]);
    }
}
