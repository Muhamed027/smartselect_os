<?php

use App\Livewire\Auth\LoginUser;
use App\Livewire\Auth\RegisterUser;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Middleware\MustBeGlobalAdministrator;
use App\Http\Middleware\RedirectIfAuthenticated;

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

Route::get('/', [HomeController::class,'index'])->name('home');
// Route::get('/test', function () {
//     return view('welcome');
// })->name('home');

Route::middleware('web')->prefix('store')->group(function () {
    Route::get('/', [StoreController::class, 'index'])
        ->name('store.index');
    Route::get('/show', [StoreController::class, 'show'])
        ->name('store.show');
});

Route::middleware('web')->prefix('blog')->group(function () {
    Route::get('/', [PostController::class, 'index'])
        ->name('blog.index');

    Route::get('/posts/{post}', [PostController::class, 'show'])
        ->name('blog.show');
});
Route::middleware(MustBeGlobalAdministrator::class)->prefix('admin')->group(function () {
    Route::get('/blog/posts/create',[PostController::class,'create'])->name('blog.create');
    Route::get('/',[AdminHomeController::class,'index'])->name('admin.home');
});

Route::middleware(RedirectIfAuthenticated::class)->group(function () {
    Route::get('/login', LoginUser::class)
        ->name('user.login');
    Route::get('/register', RegisterUser::class)
        ->name('user.register');
});

Route::middleware(Authenticate::class)->group(function () {
    Route::post('logout', LogOutController::class)
        ->name('logout');
});
