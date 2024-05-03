<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    
    Route::get('/user',[UserController::class, 'index']);

    Route::get('/users/{id}',[UserController::class, 'show']);

    Route::get('/users', [userController::class, 'index'])->name('user.index');

    Route::get('/users/create', [userController::class, 'create'])->name('user.create');

    Route::post('/users', [userController::class, 'store'])->name('user.store');

    Route::get('/users/(id)', [userController::class , 'show'])->name('user.show');

    Route::get('/posts', [PostController::class , 'index'])->name('post.index');

    Route::post('/posts/{id}', [PostController::class, 'saveComment'])->name('comments.store');

    Route::get('/posts/create', [PostController::class , 'create'])->name('posts.create');

    Route::post('/posts', [PostController::class , 'store'])->name('post.store');
    
    Route::delete('/posts/{id}', [PostController::class , 'destroy'])->name('post.destroy');

    Route::put('/postsupdate/{id}', [PostController::class, 'update'])->name('post.update');
    
    Route::get('/postsedit/{id}', [PostController::class, 'edit'])->name('post.edit'); 

    Route::get('/posts/{id}', [PostController::class , 'show'])->name('post.show');
});

require __DIR__.'/auth.php';
