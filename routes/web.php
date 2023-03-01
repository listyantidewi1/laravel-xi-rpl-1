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

//route view
Route::get('/post', function () {
    return view('berita');
})->name('berita');


//route dengan parameter
Route::get('/post/{id}', function ($id) {
    return 'Postingan ke ' . $id;
});

//route dengan nilai default / route opsional
//parameter {days_ago} tidak wajib diisi, jika tidak diisi, maka nilainya default = 20
Route::get('/recent-post/{days_ago?}', function ($daysAgo = 15) {
    return 'Postingan dari ' . $daysAgo . ' days ago';
})->name('post.recent.index');

Route::get('/', function () {
    return view('home.index');
})->name('home.index');
