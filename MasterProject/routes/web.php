<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;

use Illuminate\Support\Facades\Route;

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


// -------------------register routes --------------------------------

Route::get('/register', [UsersController::class, 'registerindex']);
Route::post('/registe', [UsersController::class, 'registerstore'])->name('register');


// -------------------register routes --------------------------------

// -------------------Login routes --------------------------------

Route::get('/login', [UsersController::class, 'loginindex']);
Route::post('/login', [UsersController::class, 'loginstore'])->name('login');


// -------------------Login routes --------------------------------

// -------------------Log Out routes ---------------------------------
Route::get('/logOut', [UsersController::class, 'destroysession'])->name('logOut');

// -------------------//Log Out routes --------------------------------

// -------------------user routes ---------------------------------
Route::get('/user', [UsersController::class, 'show']);
Route::post('/edituser', [UsersController::class, 'edituser'])->name('editprofile');

// -------------------user routes ---------------------------------

//----------------- Show Category in index---------------------------
Route::get('/', [CategoryController::class, 'index']);



Route::get('/feature', function () {
    return view('feature');
});
// Route::get('/allcars', function () {
//     return view('allcars');
// });

//--------- Single Category --------------------------------
Route::get('/Vehicles/{id}', [CategoryController::class, 'singleCategory'])->name('singleCategory');

//---------- single Car----

Route::get('/singlevhicle/{id}', [CarController::class, 'singlevhicle'])->name('singleCar');

//---------- All Cars ------
Route::get('/allcars', [CarController::class, 'allcars']);
Route::post('/addcar', [CarController::class, 'store'])->name('addcar');



// Route::get('/Vehicles', function () {
//     return view('vehicles');
// });

Route::get('/content', function () {
    return view('content');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/user', function () {
//     return view('user');
// });
