<?php



Route::get('/', 'postsController@index');
Route::get('/posts/create', 'postsController@create');
Route::post('/posts', 'postsController@store');
Route::get('/posts/{post}', 'postsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::post('/fronts', 'FrontController@store');
Route::post('/valuable', 'ValuableController@store');
Route::post('/gallery', 'GalleryController@store');
Route::get('/about', 'ValuableController@about');
Route::get('/india', 'ValuableController@india');



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
	Route::get('/', 'AdminController@dashboard');
});