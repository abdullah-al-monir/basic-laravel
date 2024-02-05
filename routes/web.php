<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/subpage', function () {
    return view('subpage');
});

//Route Parameters

Route::get('/item/{id?}', function (string $id = null) {
    if ($id) {
        return view('item')->with('id', $id);
    } else {
        return view('item')->with('id', null);
    }
});

// Route::view('/about', 'about');
