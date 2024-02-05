<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

// Route::view('/about', 'about');

Route::get('/about/subpage', function () {
    return view('subpage');
});

//Route Parameters

// Route::get('/item/{id?}', function (string $id = null) {
//     if ($id) {
//         return view('item')->with('id', $id);
//     } else {
//         return view('item')->with('id', null);
//     }
// });

// Route::get('/item/{id?}/{details?}', function (string $id = null, string $details = null) {
//     if ($id) {
//         return view('item')->with('id', $id)->with('details', $details);
//     } else {
//         return view('item')->with('id', null)->with('details', $details);
//     }
// });

// Route constrains


Route::get('/item/{id?}/{details?}', function (string $id = null, string $details = null) {
    if ($id) {
        return view('item')->with('id', $id)->with('details', $details);
    } else {
        return view('item')->with('id', null)->with('details', $details);
    }
})->whereNumber('id')->whereAlphaNumeric('details');



//Named Route

Route::get('/about-us', function () {
    return view('about');
})->name('about');