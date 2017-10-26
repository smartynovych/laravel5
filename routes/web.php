<?php

use App\Article;

Route::get('/', function () {
    return view('home');
});

Route::get('/article/', 'ArticlesController@index');

Route::get('/article/detail/{article}', 'ArticlesController@detail');

Route::get('/article/create', 'ArticlesController@create');

Route::get('/article/update/{article}', 'ArticlesController@edit');

Route::get('/article/delete/{article}', 'ArticlesController@delete');

Route::patch('/article/update/{article}', 'ArticlesController@update');

Route::post('/article/', 'ArticlesController@store');

Route::post('/article/{article}/comments', 'CommentsController@store');
