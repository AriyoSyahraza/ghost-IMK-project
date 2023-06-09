<?php

use App\Http\Controllers\PostsController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use App\Http\Controllers\CostsController;

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


Route::get('/About', function () {
    return view('about');
});
Route::get('/Fashion', function () {
    return view('fashion');
});

// Route::get('/Post', function () {
//     return view('post');
// });
// Route::get('/Blog-Post', function () {
//     return view('blog-single');
// });

Route::get('/posts', [PostsController::class, 'index'])->name('post.index');
Route::get('post/{id}', [PostsController::class, 'show'])->name('post.show');
Route::post('/posts/comment', [PostsController::class, 'comment'])->name('post.comment');

//route controller utnuk auth
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/Sign-Up', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/Sign-Up', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//controller untuk show di halaman index
Route::get('/', [CostsController::class, 'index']);
Route::get('/costs/{cost}', [CostsController::class, 'show'])->name('costs.show');

