<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddcustomerController;
use App\Http\Controllers\TypeofleaveController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/form', [AdminController::class, 'form'])->name('form');
Route::get('/summaryle', [AdminController::class, 'summaryle'])->name('summaryle');
Route::get('/profile', [AdminController::class, 'profile'])->name('ProFile')->middleware('check');
Route::get('/employee', [AdminController::class, 'employee'])->name('Employee');
Route::get('/edit', [AdminController::class, 'edit'])->name('Edit');
Route::get('/approve', [AdminController::class, 'approve'])->name('Approve');
Route::get('/disapproved', [AdminController::class, 'disapproved'])->name('DisApproved');
Route::get('/PendingApproval', [AdminController::class, 'PendingApproval'])->name('PendingApproval');

Route::get('/homeuser', [UsersController::class, 'index'])->name('homeuser');
Route::get('/formuser', [UsersController::class, 'formuser'])->name('formuser');
Route::get('/profileuser', [UsersController::class, 'profileuser'])->name('profileuser')->middleware('check');
Route::get('/history', [UsersController::class, 'history'])->name('history');



Route::get('/employee', [AddcustomerController::class, 'index']);
Route::post('/edit', [AddcustomerController::class, 'index'])->name('Edit');
Route::get('users/{id}', [AddcustomerController::class, 'show'])->name('users.show');
Route::post('addCustomer', [AddcustomerController::class, 'addCustomer'])->name('addCustomer');
Route::get('/deleteCustomer/{id}', [AddcustomerController::class, 'DeleteCustomer'])->name('DeleteCustomer');
Route::get('/form', [TypeofleaveController::class, 'index']);
Route::post('insertform', [TypeofleaveController::class, 'insertform'])->name('insertform');
Route::post('add', [UsersController::class, 'add'])->name('addd');




// call api
Route::get('view/detail/users', [HomeController::class, 'index'])->name('view/detail/users');

// login api
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginApi', [LoginController::class, 'loginApi'])->name('loginApi');
Route::get('logout', [LoginController::class, 'logout'])->name('logout1');


// register api
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('registerApi', [RegisterController::class, 'registerApi'])->name('registerApi');

// form product
Route::get('form/product/new', [ProductController::class, 'index'])->name('form/product/new');

Auth::routes();
// Route::get('home', [HomeController::class, 'index'])->name('home');
// // Route::get('/homelogin', [App\Http\Controllers\HomeController::class, 'index'])->name('homelogin');

// Route::get('home', [App\Http\Controllers\HomeController::class, 'admin_in'])->name('admin');

// Route::get('/employee', [App\Http\Controllers\HomeController::class, 'admin_create'])->name('create');

//
