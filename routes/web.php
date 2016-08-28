<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('cats');
});

Route::get('about', function() {
    return view('about')->with('numberOfCats', Purr\Models\Cat::count());
});

Route::get('cats', function() {
    return 'All cats';
});

Route::get('cats/{id}', function($id) {
    return sprintf('Cat #%s', $id);
})->where('id', '[0-9]+');