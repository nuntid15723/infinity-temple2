<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


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
    return view('admin.home');
})->name('/');

Route::get('/form', [AdminController::class, 'form'])->name('form');
Route::get('/summaryle', [AdminController::class, 'summaryle'])->name('summaryle');
Route::get('/profile', [AdminController::class, 'profile'])->name('ProFile');
Route::get('/employee', [AdminController::class, 'employee'])->name('Employee');
Route::get('/edit', [AdminController::class, 'edit'])->name('Edit');
Route::get('/approve', [AdminController::class, 'approve'])->name('Approve');
Route::get('/disapproved', [AdminController::class, 'disapproved'])->name('DisApproved');
Route::get('/PendingApproval', [AdminController::class, 'PendingApproval'])->name('PendingApproval');

Route::get('home', [HomeController::class, 'index'])->name('home');



// call api
Route::get('view/detail/users', [HomeController::class, 'index'])->name('view/detail/users');

// login api
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginApi', [LoginController::class, 'loginApi'])->name('loginApi');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// register api
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('registerApi', [RegisterController::class, 'registerApi'])->name('registerApi');

// form product
Route::get('form/product/new', [ProductController::class, 'index'])->name('form/product/new');

Auth::routes();

