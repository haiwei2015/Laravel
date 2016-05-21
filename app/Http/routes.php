<?php

Route::get('/',function(){  return redirect('/news'); });
Route::get('news','NewsController@index');
Route::get('news/show/{slug}','NewsController@show');



/**
Route::get('user/{id}','UserController@showProfile');
Route::get('admin','Admin\AdminHomeController@index');
Route::resource('photo', 'PhotoController');

Route::get('/', function () {
	return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
*/
 