<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Middleware\AdminAuth;
use PHPUnit\Framework\Attributes\Group;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', function () {
    return view('layout');
});

/********************************************************* Admin */
Route::get('/admin/login', [ProfileController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [ProfileController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware'=>['admin_auth','isAdmin']],function(){
    Route::get('/admin/home', [ProfileController::class, 'adminHome'])->name('adminHome');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/admin/logout', [ProfileController::class, 'alogout'])->name('alogout');
});

/****************************************************** New User */
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

/****************************************************** Employer */
Route::get('login_employer', [AuthController::class, 'index'])->name('login_employer');
Route::get('signup_employer', [AuthController::class, 'signup_employer'])->name('signup_employer');
Route::post('post-signup_employer', [AuthController::class, 'postSignup_employer'])->name('signup_employer.post');
Route::post('post-login_employer', [AuthController::class, 'postLogin_employer'])->name('login_employer.post');
Route::get('page_employer', [AuthController::class, 'page_employer'])->name('page_employer');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/******************************************************** Worker */
Route::get('/worker/login', [AuthController::class, 'workerLogin'])->name('workerLogin');
Route::get('/worker/register', [AuthController::class, 'workerRegister'])->name('workerRegister');


/********************************************************** test */
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('products', ProductController::class);
// });

Auth::routes();
// Route Worker
Route::middleware(['auth','user-role:worker'])->group(function()
{
    Route::get("/worker/home",[HomeController::class, 'workerHome'])->name("worker.home");
});
// Route Employer
Route::middleware(['auth','user-role:employer'])->group(function()
{
    Route::get("/employer/home",[HomeController::class, 'employerHome'])->name("employer.home");
});