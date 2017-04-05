<?php

/*
 * Frontend Routes
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{category}',function (){
    return 'route for category of posts';
});

Route::get('/post/{id}',function (){
    return 'route for single post';
});

Route::get('/search/{query}',function (){
    return 'route for search';
});

Route::get('/cv}',function (){
    return 'route for CV';
});

/*
 * Hackend Routes
 */

Route::get('/admin', [
        'middleware' => 'auth',
        'uses' => ''
    ]
);
