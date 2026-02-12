<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\BukuController;

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;

Route::resource('classrooms', ClassroomController::class);
Route::resource('students', StudentController::class);

Route::resource('admin/buku', BukuController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::post('/submit', function () {
    return 'Form Submitted!';
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "Post $id : $slug";
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/about', function () {
    return 'Tentang Kami';
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::resource('admin/buku', BukuController::class, );