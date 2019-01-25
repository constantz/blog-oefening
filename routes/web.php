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

    $tasks = ['Go to the market', 'Go to the store', 'Go to work'];

    return view('welcome')->with([
        'foo' => '<script>alert("Hoi")</script>',
        'tasks' => $tasks,
    ]);

});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/about', function() {
    return view('about');
});