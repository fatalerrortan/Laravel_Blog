<?php

/*
 * Frontend Routes
 */

Route::get('/', 'Front@index');

Route::get('/posts/{category}', 'Front@posts');

Route::get('/post/{id}', 'Front@post');

Route::post('more', 'Front@more');

Route::get('/search/{query}', "Front@search");

Route::get('/cv', 'Front@about');

Route::post('/comment', 'Front@comment');

Route::get('/test', 'Front@test');

Route::get('/about', 'Front@about');
/*
 * Backend Routes
 */

Route::get('/admin', [
        'middleware' => 'auth.basic',
        'uses' => 'Admin@index'
    ]
);

Route::get('/insert', 'Admin@insert');

Route::get('/update/{post_id}', 'Admin@update');

Route::get('/delete/{post_id}', 'Admin@delete');

