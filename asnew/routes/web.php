<?php



Route::get('/', 'postsController@index');
Route::get('/asrahainfo', function() {
	return view('asrahainfo');
})->name('asrahainfo');
Route::get('all-posts', 'postsController@allPosts')->name('posts.allposts');
Route::get('/posts/create', 'postsController@create');
Route::post('/posts', 'postsController@store');
Route::get('/posts/{post}', 'postsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::post('/fronts', 'FrontController@store');
Route::post('/valuable', 'ValuableController@store');
Route::post('/gallery', 'GalleryController@store');
Route::get('/about', 'ValuableController@about');

Route::get('/india', 'ValuableController@india');

Route::post('/winner', 'WinnerController@store');
Route::post('/theme', 'ThemeController@store');
Route::get('/templates', 'ThemeController@index')->name('templates.template');;
Route::get('/templates/{id}/download', 'ThemeController@download')->name('templates.download');;



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
	Route::get('/', 'AdminController@dashboard');
});

Route::get('/delete-post/{post_id}', 'PostsController@getDeletePost')->name('post.delete');
Route::get('/delete-banner/{id}', 'PostsController@deleteFront')->name('front.delete');
Route::get('/delete-valuable/{id}', 'PostsController@deletevaluable')->name('valuable.delete');
Route::get('/delete-gallery/{id}', 'PostsController@deletegallery')->name('gallery.delete');

Route::get('/delete-comment/{id}', 'CommentsController@deletecomment')->name('comment.delete');

Route::get('/delete-winner/{id}', 'WinnerController@destroy')->name('winner.delete');
Route::get('/delete-theme/{id}', 'ThemeController@destroy')->name('theme.delete');
