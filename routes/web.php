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
    return view('Home',['title'=>'Home']);
});

Route::get('/PMB', function () {
    return view('pmb',['title'=>'PMB']);
});

Route::get('/PCA', function () {
    return view('pca',['title'=>'PCA']);
});

Route::get('/Webinar', function () {
    return view('webinar',['title'=>'Webinar']);
});

Route::get('/Beasiswa', function () {
    return view('beasiswa',['title'=>'Beasiswa']);
});

Route::get('/Virtualtour', function () {
    return view('virtualtour',['title'=>'Virtualtour']);
});