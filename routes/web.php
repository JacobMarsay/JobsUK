<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JobSeekerRegistrationController;

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
Route::get('/', function () {
    return view('login');
});

Route::get('users/registration', function () {
    return view('users/registration');
});

// Route::get('/jobseeker-registration', function () {
//     return view('jobseeker-registration');
// });


Route::get('/jobseeker-registration', [JobSeekerRegistrationController::class, 'create'])->name('create');
Route::post('/jobseeker-registration', [JobSeekerRegistrationController::class, 'store'])->name('store');

Route::get('/company-registration', function () {
    return view('company-registration');
});









