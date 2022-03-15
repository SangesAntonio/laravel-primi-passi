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

Route::get('/', function () {
    $data = [
        'day' => '14/03/2022',
    ];
    return view('home', $data);
});
Route::get('/page', function () {
    $data = [
        'numb_days' => 25,
        'languages' => ['HTML', 'CSS', 'BOOTSTRAP', 'JAVASCRIPT', 'VUE.JS', 'PHP', 'MYSQL', 'LARAVEL']
    ];
    return view('page', $data);
})->name('page');
