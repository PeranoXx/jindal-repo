<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{any}', function () {
    return view('welcome'); // or your main Vue view
})->where('any', '^(?!api).*$');

// Route::get('/foo', function () {
//     // dd(11);
//     Artisan::call('storage:link');
// });
