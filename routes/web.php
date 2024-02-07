<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
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

Route::get('/posts', function () {
    return view('post');
})->name('post');


// Redirect

Route::redirect('/about', '/test', 301);

// Route Groups

Route::prefix('page')->group(function () {
    Route::get('/1', function () {
        return "<h2>Welcome to Page number 1</h2>";
    });
    Route::get('/group', function () {
        return "<h2>Welcome to Group page</h2>";
    });
    Route::get('/sun', function () {
        return "<h2>Welcome to Sun page</h2>";
    });

});

// Fallback

Route::fallback(function () {
    return "<h1>Page not found!</h1>";
});