<?php
Route::get('/test/user/{id}', 'PostController@getOne');
Route::get('/test/user/', 'PostController@getAll');
Route::match(['get', 'post'], '/test/new', 'PostController@newPost');
Route::post('/test/result', 'PostController@newPost');
Route::match(['get', 'post'], 'test/edit/{id}', 'PostController@editPost');
?>