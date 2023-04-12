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

// Route::get('/', function () {
//     return view('welcome');
// });

$posts = [
    1 => [
        'title' => 'Introduction to Laravel',
        'content' => 'Welcome to Laravel',
        'is_new' => true,
        'has_comments' => true
    ],
    2 => [
        'title' => 'Introduction to PHP',
        'content' => 'Welcome to PHP',
        'is_new' => false,
        'has_comments' => false
    ],
    3 => [
        'title' => 'Welcome to Python',
        'content' => 'Welcome to Python',
        'is_new' => false,
        'has_comments' => false
    ]
];

//route view
Route::get('/post', function () {
    return view('posts.index');
})->name('posts.index');


//route dengan parameter
Route::get('/post/{id}', function ($id) use ($posts) {
    //helper function, utk mendeteksi id yg tidak terdaftar
    abort_if(!isset($posts[$id]), 404);
    return view('posts.show', ['post' => $posts[$id]]);
})->name('posts.show');

//route dengan nilai default / route opsional
//parameter {days_ago} tidak wajib diisi, jika tidak diisi, maka nilainya default = 20
Route::get('/recent-post/{days_ago?}', function ($daysAgo = 15) {
    return 'Postingan dari ' . $daysAgo . ' days ago';
})->name('post.recent.index');

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/contact', function () {
    return view('home.contact');
})->name('home.contact');