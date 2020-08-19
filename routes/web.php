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

Route::get('/', 'MainController@index')->name('home');
Route::get('/about-us', 'MainController@about');
Route::get('/services', 'MainController@services');
Route::get('/projects', 'MainController@projects');
Route::get('/contact-us', 'MainController@contact');

Auth::routes();

// Route::get('{path}', 'MainController@index')->where('path', '([A-z\d\-\/_.]+)?');
// Route::get('/dashboard/{path}', 'MainController@dashboard')->name('dashboard')->where('path', '.*');
/* used to handle vue routes */
// Route::get('/{path}', 'HomeController@index')->where('path', '([A-z\d\-\/_.]+)?');
