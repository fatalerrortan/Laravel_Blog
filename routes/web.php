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

Route::post('/contact', 'Front@contact');

/*
 * Backend Routes
 */

Route::get('/admin', [
        'middleware' => 'auth.basic',
        'uses' => 'Admin@index'
    ]
);

Route::post('/filter', 'Admin@filterable');

Route::post('/insert', 'Admin@insert');

Route::post('/update', 'Admin@update');

Route::post('/delete', 'Admin@delete');

Route::post('/edit', 'Admin@edit');

