<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\AnswerCheck;
use App\Http\Middleware\RedirectLogin;

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
//     return view('welcome');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\CategoryController::class, 'index'])->name('home');
Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.details');
Route::get('/material/{idx}/{id}', [App\Http\Controllers\MaterialController::class, 'show'])->name('material.details');
Route::get('/quiz/{idx}/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('question.details')->middleware([RedirectLogin::class, AnswerCheck::class]);

Route::prefix('answer')->group(function () {
    Route::get('{id}/submit', [App\Http\Controllers\UserAnswerController::class, 'store'])->name('answer.submit');
    Route::get('{id}/retry', [App\Http\Controllers\UserAnswerController::class, 'delete'])->name('answer.retry');
    Route::get('{id}/retake', [App\Http\Controllers\UserAnswerController::class, 'retake'])->name('answer.retake');
});


Route::get('/congrats/{id}', [App\Http\Controllers\QuestionController::class, 'finish'])->name('congrats')->middleware(RedirectLogin::class);
Route::get('/profile', [App\Http\Controllers\UserController::class, 'show'])->name('profile')->middleware(RedirectLogin::class);
Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');

Route::get('/login', function () {
    return view('auth.login');
})->name('login.page');
Route::get('/register', function () {
    return view('auth.register');
})->name('register.page');


Route::get('search', [SearchController::class, 'search'])->name('search');

Route::prefix('auth')->group(function () {
    Route::get('google', [LoginController::class, 'redirectToGoogle']);

    Route::get('google/callback', [LoginController::class, 'handleGoogleCallback']);
});



