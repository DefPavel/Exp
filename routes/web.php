<?php

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
    return view('index');
});
Route::get('/Events', function () {
    return view('content.Event-grid');
});
Route::get('/News', function () {
    return view('content.News-grid');
});
Route::get('/NewsPage', function () {
    return view('content.News-Page');
});
Route::get('/EventPage', function () {
    return view('content.Event-page');
});
