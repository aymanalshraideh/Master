
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
// Route::get('/regeasterAdmin', function () {
//     return view('dashboard.signup');
// });

// -------------------register routes --------------------------------

Route::get('/registerAdmin',[UsersController::class,'adminRegisterindex']);
Route::post('/registerr',[UsersController::class,'adminRegisterstore'])->name('registerAdmin');


// -------------------register routes --------------------------------
