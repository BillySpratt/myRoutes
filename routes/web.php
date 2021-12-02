<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\GameController as UserGameController; 
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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('about', [AboutController::class, 'about']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'register']);

Route::get('/profile', [ProfileController::class, 'displayProfile']);
Auth::routes();

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home',[App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/user/games', [UserGameController::class, 'index'])->name('user.games.index');
Route::get('/user/games/{id}', [UserGameController::class, 'show'])->name('user.games.show');