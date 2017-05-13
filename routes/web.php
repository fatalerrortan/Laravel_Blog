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

Route::post('/newsletter', 'Front@newsletter');

Route::get('/test', 'Front@test');

Route::get('/about', 'Front@about');

Route::post('/contact', 'Front@contact');

/*
 * Backend Routes
 */

//Route::get('/admin', [
//        'middleware' => 'auth.basic',
//        'uses' => 'Admin@index'
//    ]
//);

Route::get('/adminauth', 'Admin@auth');

Route::post('/admin', 'Admin@index');

Route::post('/filter', 'Admin@filterable');

Route::post('/insert', 'Admin@insert');

Route::post('/update', 'Admin@update');

Route::post('/delete', 'Admin@delete');

Route::post('/edit', 'Admin@edit');

Route::post('/editarticle', 'Admin@editArticle');

Route::post('/broadcast', 'Admin@broadcast');

/*
 *  Prototype for domanda
 */
//domanda frontend
Route::get('/domanda', 'Domanda@index');

Route::get('/domanda/profile', 'Domanda@profile');

Route::get('/domanda/profile/edit', 'Domanda@profileEdit');

Route::get('/domanda/dashboard', 'Domanda@dashboard');

Route::get('/domanda/question/{id}', 'Domanda@question');

Route::get('/domanda/question/push', 'Domanda@questionPush');

Route::get('/domanda/answer/{id}', 'Domanda@answer');

Route::get('/domanda/answer/push{id}', 'Domanda@answerPush');

Route::get('/domanda/cancle/{id}', 'Domanda@cancle');

//domanda backend
Route::get('/domanda/admin', 'Domanda@admin');
