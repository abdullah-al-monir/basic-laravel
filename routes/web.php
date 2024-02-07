<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// routes/web.php



// Route for Home Page
Route::get('/', [PageController::class, 'showHomePage'])->name('home');

// Route for About Page
Route::get('/about', [PageController::class, 'showAboutPage'])->name('about');

// Route for Post Page
Route::get('/post', [PageController::class, 'showPostPage'])->name('post');


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