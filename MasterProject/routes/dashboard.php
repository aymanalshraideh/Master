
<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('dashboard.index');
});
Route::get('/form', function () {
    return view('dashboard.form');
});

Route::get('/element', function () {
    return view('dashboard.element');
});

Route::get('/chart', function () {
    return view('dashboard.chart');
});
