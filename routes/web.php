<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
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
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
Route::middleware('auth')->group(function () {
    // Route::get('/user', [UserController::class, 'index']);
    // Route::get('/post', [PostController::class, 'index']);
    // Route::get('/event', [EventController::class, 'index']);
});


// ---------------------------------------------------------------
//redirect routes untuk kasus CRUD
Route::redirect('/here', '/there');


// ---------------------------------------------------------------
//View Routes
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Controllers
Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id?}', [ArticleController::class, 'articles']);

//Resource Controller
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Rakha']);
});
Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);
