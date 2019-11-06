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

//Route::get('/home', function () {
//    return view('pages.home');
//});
//Route::get('/about-us', function () {
//    return view('pages.about-us');
//});
//
//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});

//

// Route::group([
//    'prefix' => 'blog', // Must match its `slug` record in the DB > `data_types`
//    'middleware' => ['web'],
//    'as' => 'voyager-blog.blog.',
//    'namespace' => $namespace,
//], function () {
//    Route::get('/', ['uses' => 'PostController@getPosts', 'as' => 'list']);
//    Route::get('{slug}', ['uses' => 'PostController@getPost', 'as' => 'post']);
//});
//Route::group([
//    'prefix' => 'testimonials',
//], function () {
//    Route::get('/{slug}', 'TestimonialController@index');
//});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return View::make('pages.home');
});
Route::get('/', function () {
    return view('layouts.master');
});
// Route::get('/',function(){

// 	return View::make('pages.home');
// });
Route::get('aboutus', function()
{
    return View::make('pages.aboutus');
});
// Route::get('projects', function()
// {
//     return View::make('pages.projects');
// });
// Route::get('contact', function()
// {
//     return View::make('pages.contact');
// });
