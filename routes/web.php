<?php

use Illuminate\Support\Facades\Route;

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

use \App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});



#posts routes
Route::get('/posts',
    [Controllers\PostsController::class,"index"])->name("posts.index");

Route::get('/posts/create',
    [Controllers\PostsController::class,"create"])->name("posts.create");

Route::post('/posts',
    [Controllers\PostsController::class,"store"])->name("posts.store");

Route::get('/posts/{post}',
    [Controllers\PostsController::class,"show"])->name("posts.show");

Route::get('/posts/{post}/edit',
    [Controllers\PostsController::class,"edit"])->name("posts.edit");

Route::put('/posts/{post}',
    [Controllers\PostsController::class,"update"])->name("posts.update");

Route::delete('/posts/{post}',
    [Controllers\PostsController::class,"destroy"])->name("posts.delete");


# user routes
//userposts.show

Route::get('/users',
    [Controllers\UserController::class,"index"])->name("users.index");

Route::get('/users/{user}/posts',
    [Controllers\UserController::class,"getPosts"])->name("userposts.show");
