<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/getproducts', [ProductController::class, 'getproducts'])
    ->middleware(['auth'])->name('getproducts');

Route::get('/createproduct', [ProductController::class, 'createproduct'])
    ->middleware(['auth'])->name('createproduct');

Route::post('/storeproduct', [ProductController::class, 'storeproduct'])
    ->middleware(['auth'])->name('storeproduct');

Route::get('/editproduct/{id}', [ProductController::class, 'editproduct'])
    ->middleware(['auth'])->name('editproduct');

Route::put('/updateproduct/{id}', [ProductController::class, 'updateproduct'])
    ->middleware(['auth'])->name('updateproduct');

Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])
    ->middleware(['auth'])->name('deleteproduct');

require __DIR__.'/auth.php';
