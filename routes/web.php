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

Route::post('/domanda/profile', 'Domanda@profile');

//Route::get('/domanda/profile/edit', 'Domanda@profileEdit');

Route::post('/domanda/dashboard', 'Domanda@dashboard');

Route::post('/domanda/question', 'Domanda@question');

Route::post('/domanda/question/push', 'Domanda@questionPush');

Route::post('/domanda/question/review', 'Domanda@questionReview');

Route::post('/domanda/question/review', 'Domanda@questionReview');

Route::post('/domanda/question/solveit', 'Domanda@solveIt');

Route::post('/domanda/question/handover', 'Domanda@handOver');

Route::post('/domanda/answer', 'Domanda@answer');

Route::post('/domanda/answer/accept', 'Domanda@accept');
/*
 * to implement
 */

Route::get('/domanda/dashboad', 'Domanda@dashboard');

//domanda backend

Route::get('/domanda/admin', 'Domanda@admin');
