<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


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

// Route::get('/', function () {
//     return view('student.index');
// });

// Route::get('/foods_index', function () {
//     return view('foods.index');
// })->name('foods');

// Route::get('/students_f1', function () {
//     return view('students.f1');
// })->name('students.f1');

// Route::get('/students_f2', function () {
//     return view('students.f2');
// })->name('students.f2');

// Route::get('/students_f3', function () {
//     return view('students.f3');
// })->name('students.f3');

// Route::get('/child', function () {
//     return view('child');
// })->name('child');

// Route::get('/child', function () {
//     return view('child');
// })->name('child');

// Route::resource('photos', PhotoController::class);
// 學生資料
// 自訂single action 放下面
Route::resource('students', StudentController::class);
Route::get('/students_test', [StudentController::class, 'test'])->name('students.test');

// 老師資料
Route::resource('teachers', TeacherController::class);