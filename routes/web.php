<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JobSeekerRegistrationController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Http\Controllers\JobPostController;

use App\Http\Controllers\LogoutController;


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

Route::get('/', [LoginController::class, 'login'])->name('createLogin');
Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('users/registration', function () {
    return view('users/registration');
});

Route::get('/jobseeker-registration', [JobSeekerRegistrationController::class, 'create'])->name('createJobSeeker');
Route::post('/jobseeker-registration', [JobSeekerRegistrationController::class, 'store'])->name('storeJobSeeker');

Route::get('/company-registration', [CompanyRegistrationController::class, 'create'])->name('createCompany');
Route::post('/company-registration', [CompanyRegistrationController::class, 'store'])->name('storeCompany');

Route::resource('/posts', JobPostController::class)->middleware('auth');



Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');










