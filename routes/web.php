<?php
Route::get('/test/{id}', 'PostController@getOne')->where('id', '[0-9]+');
Route::get('/test/all', 'PostController@getAll');
Route::match(['get', 'post'], '/test/new', 'PostController@newPost');
Route::post('/test/result', 'PostController@newPost');
Route::match(['get', 'post'], 'test/edit/{id}', 'PostController@editPost')->where('id', '[0-9]+');
Route::post('/test/editPost', 'PostController@editPost');
Route::match(['get', 'post'], 'test/del/{id}', 'PostController@delPost')->where('id', '[0-9]+');
Route::get('/test/trash', 'PostController@getDeletedPost');
Route::get('/test/restore/{id}', 'PostController@restorePost')->where('id', '[0-9]+');
?>