<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('layout');
});

/*********************************************** Admin */
// Route::get('/admin/login', function () {
//     return view('admin/login');
// });
Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::get('/admin/home', function () {
    return view('admin.dashboard');
});

/*********************************************** New User */
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

/*********************************************** Employer */
Route::get('login_employer', [AuthController::class, 'index'])->name('login_employer');
Route::get('signup_employer', [AuthController::class, 'signup_employer'])->name('signup_employer');
Route::post('post-signup_employer', [AuthController::class, 'postSignup_employer'])->name('signup_employer.post');
Route::post('post-login_employer', [AuthController::class, 'postLogin_employer'])->name('login_employer.post');
Route::get('page_employer', [AuthController::class, 'page_employer'])->name('page_employer');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/*********************************************** Worker */
Route::get('/login/worker', function () {
    return view('worker/login');
});
Route::get('/login/worker', function () {
    return view('worker/register');
});
