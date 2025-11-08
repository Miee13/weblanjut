<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Route::get('/', function () {
//     return view('welcome');
// });

// // ini tempat ruting halamandua
// Route::get('/kedua', function () {
//     return view('halamandua');
// });
// // akhir dari ruting halamandua

// // ini tempat ruting halamantiga
// Route::get('/fitur', function () {
//     return view('fitur',['nama' => 'selamat datang']);
// });
// // akhir dari ruting halamantiga

// // ini tempat ruting halamandua
// Route::get('/product/{id}', function ($id) {
//     $product = [
//         'id' => $id,
//         'barang' => 'tiket',
//         'harga' => 100000
//     ];
//     return view('product', ['product' => $product]);
// });
// // akhir dari ruting halamandua