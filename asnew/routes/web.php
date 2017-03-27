<?php



Route::get('/', 'postsController@index');
Route::get('/asrahainfo', function() {
	return view('asrahainfo');
})->name('asrahainfo');
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

Route::get('/delete-post/{post_id}', 'PostsController@getDeletePost')->name('post.delete');
Route::get('/delete-banner/{id}', 'PostsController@deleteFront')->name('front.delete');
Route::get('/delete-valuable/{id}', 'PostsController@deletevaluable')->name('valuable.delete');
Route::get('/delete-gallery/{id}', 'PostsController@deletegallery')->name('gallery.delete');