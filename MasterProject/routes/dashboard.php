
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;


use App\Models\Admin;

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
Route::get('/loginAdmin', function () {
    return view('dashboard.signin');
});
// 4
// Route::get('/tablesAdmin', function () {
//     return view('dashboard.tables');
// });
// Route::get('/regeasterAdmin', function () {
//     return view('dashboard.signup');
// });

// -------------------register routes --------------------------------

Route::get('/registerAdmin',[UsersController::class,'adminRegisterindex']);
Route::post('/registerr',[UsersController::class,'adminRegisterstore'])->name('registerAdmin');


// -------------------register routes --------------------------------

Route::get('/allUsers',[AdminController::class,'getAllUsers']);
Route::get('/alldrivers',[AdminController::class,'getAllDrivers']);
////------------ Active Driver-----
Route::get('/alldrivers/{id}',[AdminController::class,'activeDriver'])->name('active');
//------- delete Driver -----
Route::get('/deleteDriver/{id}',[AdminController::class,'deleteDriver'])->name('deletedriver');




//----------------- Show Category---------------------------
Route::get('/categoryadmin',[AdminController::class,'getallcategories']);
//*---------------- Add category --------------------------------
Route::post('/categoryadmin',[AdminController::class,'addcategory'])->name('addcategory');

//-------------- delete category --------------------------------
Route::get('deleteCategory/{id}',[AdminController::class,'deleteCategory'])->name('deleteCategory');

//-------------- Show single category --------------------------------
// Route::get('singlecategory/{id}',[AdminController::class,'showsingleCategory'])->name('singleCategory');

//-------------- edit category --------------------------------
// Route::post('deleteCategory/{id}',[AdminController::class,'deleteCategory'])->name('editCategory');

//------------- all cars--------
Route::get('/allcarsadmin',[AdminController::class,'showallCars']);

//------------ delete Car-----

Route::get('/deletecars/{id}',[AdminController::class,'deleteCar'])->name('deleteCar');
