<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//     return view('home.index');
// });

Route::get('/', [HomeController::class,'index']);

Route::post('/upload_post', [HomeController::class, 'upload']);
Route::get('/view_post', [HomeController::class, 'view_post']);
Route::get('/delete_post/{id}', [HomeController::class, 'delete_post']);
Route::get('/update_post/{id}', [HomeController::class, 'update_post']);
Route::post('/confirm_update/{id}', [HomeController::class, 'confirm_update']);
Route::get('redirects', 'App\Http\Controllers\HomeController@index');
Route::post('/addUser', [HomeController::class, 'addUser']);
Route::get('/User_menu', [HomeController::class, 'User_menu'])->name('User_menu');
Route::get('/famtree', [HomeController::class, 'famtree'])->name('famtree');
Route::get('/update_user/{id}', [HomeController::class, 'update_user'])->name('update_user');
Route::post('/confirm_updateUser/{id}', [HomeController::class, 'confirm_updateUser']);
Route::get('/delete_user/{id}', [HomeController::class, 'delete_user']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
});
