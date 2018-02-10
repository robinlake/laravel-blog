<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public page routes
Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/programs', 'PagesController@programs')->name('programs');


// Posts routes
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}',
['as' => 'frangle', 'uses' => 'PostsController@show']);

Route ::post('/posts/{post}/comments','CommentsController@store');

// User Routes
// Route::get('/register', 'RegistrationController@create');
// Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


