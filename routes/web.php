<?php

Route::get('/', function () {
    return view('test', [
        'name' => request('name')
    ]);
});

//Example for wild card
/*Route::get('/posts/{post}', function ($post) {

    $posts = [
        'my-first-post' => "Hello This is my first post",
        'my-second-post' => "This is my second post"
    ];

    if (!array_key_exists($post, $posts)) {
        abort (404, 'No relavent posts found');
    }

    return view('posts', [
        'post' => $posts[$post] ?? "No posts available for view"
    ]);

});*/

Route::get('/posts/{post}', 'PostsController@show');
