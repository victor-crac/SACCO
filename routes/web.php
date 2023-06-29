<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



-/*------------------------------------------------------------------------
|Admin  Routes
|--------------------------------------------------------------------------
*/
    Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class,'Index'])->name('login_form');
    Route::get('/login/owner',[AdminController::class,'Login'])->name('admin.login');

    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard');

     }
    );
    



/*

*****End****

*/

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------Route:get('/login',[AdminController::class,'index'])->name('login_form');--
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
