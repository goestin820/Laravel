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

// localhost/s2
// localhost/user/kai
Route::get('/f1', function () {
    return view('f1');
});

Route::get('/f2', function () {
    return view('f2');
})->name('f2_12345');




Route::get('/user/{name?}', function (string $name = null) {
    $data = [
        'name' => $name
    ];
    return view('hello', ['data' => $data]);
});
 
Route::get('/user/{name?}', function (string $name = 'John') {
    $data = [
        'name' => $name
    ];
    return view('hello', ['data' => $data]);
});



// localhost/get/888/taipei
Route::get('/get/{id}/{address}', function (string $id, string $address) {
    $data = [
        'id' => $id,
        'address' => $address,
    ];
    return view('hello', ['data' => $data]);
});


Route::get('/back/01', function () {
    return view('backend.back_01');
});

Route::get('/front/01', function () {
    return view('front.front_01');
});



Route::get('/', function () {
    $data1 = 'data1 ok';
    $data2 = 'data2 ok';
    return view('hello', ['data1' => $data1, 'data2' => $data2]);
})->name('byebye');;

Route::get('/sum', function () {
    $data = [
        'data1' => 'data1 ok',
        'data2' => 'data2 ok'
    ];
    return view('hello', ['data' => $data]);
});

Route::get('/s1', function () {
    return view('hello');
});

Route::get('/s2', function () {
    return view('hello');
});

Route::post('/s2', function () {
    return view('hello');
});

Route::get('/s55688', function () {
    $data = [
        's1' => 'amy',
        's2' => 'bob',
        's3' => 'cat'
    ];
    echo "test111";
    // dd($data);
    dump($data);
    echo "test222";

    // return view('hello');
});

