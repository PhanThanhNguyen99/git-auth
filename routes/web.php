<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Menber;
use App\Http\Middleware\AdminRole;
use App\Http\Controllers\Auth1;

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

// Route::get('/', function () {
//     return view('login');
// });
// // Route::post("user",[Auth1::class,'auth']);
// // Route::get('/login', function () {
// //     return view('login');
// // })->name("login");

// // Route::post("register",[Auth1::class,'register']);
// // Route::get('/register', function () {
// //     return view('register');
// // })->name("register");

// Route::get('admin',function(){
//     return view("Admin.admin");
// })->middleware('AdminRole');

// Route::get('profile', function () {
//     return view('profile');
// })->name("profile");
// Route::get('logout',function(){
//     if(session()->has('user')){
//         session()->pull('user');
//         return redirect('login');
//     }
//     else{
//         return redirect('login');
//     }
// });
// Route::middleware(['localization'])->group(function () {
//     Route::get('/welcome', function () {
//         return view('Admin.welcome');
//     });
//     Route::get('change-language/{language}',[Auth1::class,'changeLanguage'])->name('change-language');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
