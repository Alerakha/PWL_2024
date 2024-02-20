<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/world', function () {
    return 'World';
});
Route::get('/welcome', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'Nim : 2241720113 <br>' . ' Nama : Aleron Tsaqif Rakha Rajendra';
});
Route::get('/user/{name?}', function ($name) {
    return 'Nama Saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama Saya ' . $name;
});

Route::get('/user/profile', function () {
    // return 'Test Profile Text';
})->name('profile');
// ---------------------------------------------------------------
// Group and route prefix
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });
// Group and route prefix
// ---------------------------------------------------------------
//redirect routes untuk kasus CRUD
Route::redirect('/here', '/there');
//redirect routes untuk kasus CRUD 
// ---------------------------------------------------------------
//View Routes
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']); 
//View Routes

// Controllers
