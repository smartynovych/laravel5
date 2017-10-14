<?php

use App\Article;


Route::get('/', function () {
    return view('home');
});

Route::get('/article/', 'ArticlesController@index');

Route::get('/article/detail/{article}', 'ArticlesController@detail');

Route::get('/article/create', 'ArticlesController@create');

Route::post('/article/store', 'ArticlesController@store');


