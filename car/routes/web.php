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

// Route::get('/', function () {
//     return view('hello');
// });

Route::get('/', function () {
    return view('car.index');
})->name('cars.index');

Route::get('/f1', function () {
    return view('car.f1');
})->name('cars.f1');

Route::get('/f2', function () {
    return view('car.f2');
})->name('cars.f2');

Route::get('/f3', function () {
    return view('car.f3');
})->name('cars.f3');


Route::get('/tasks', function () {

    $data = [
        [
            'id' => 1,
            'name' => 'amy'
        ],
        [
            'id' => 2,
            'name' => 'bob'
        ],
        [
            'id' => 3,
            'name' => 'cat'
        ]
    ];
    
    // return view('tasks', ['tasks' => Task::all()]);
    return view('tasks', ['tasks' => $data ]);
    // return view('tasks')->with('tasks',$data);
});

Route::get('/test', function () {
    return view('test.test');
})->name('test.test');
