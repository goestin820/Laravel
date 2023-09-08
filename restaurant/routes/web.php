<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PhotosController;
use App\Http\Controllers\FoodController;

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

// Route::resource('photos', PhotoController::class);
Route::resource('foods', FoodController::class);

Route::get('/foods_index', function () {
    return view('foods.index');
})->name('foods');

Route::get('/foods_f1', function () {
    return view('foods.f1');
})->name('foods.f1');

Route::get('/foods_f2', function () {
    return view('foods.f2');
})->name('foods.f2');

Route::get('/foods_f3', function () {
    return view('foods.f3');
})->name('foods.f3');

Route::get('/child', function () {
    return view('child');
})->name('child');

