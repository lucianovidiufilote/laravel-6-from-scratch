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

Route::get('/', function () {
    $name = request('name');
    return view('welcome', ['name' => $name]);
});

Route::get('/test', function () {
    $name = request('name');
    return view('test', ['name' => $name]);
});

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'first' => 'HEllo!',
//        'second' => 'Better'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, post not found!');
//    }
//
//    return view('post',
//        [
//            'post' => $posts[$post]
//        ]);
//});


Route::get('/posts/{post}', 'PostsController@show');
