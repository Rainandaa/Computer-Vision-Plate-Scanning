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

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Register', function () {
    return view('Register Page');
});

Route::get('/Main', function () {
    return view('Main Menu');
});

Route::get('/LogReport', function () {
    return view('Log Report');
});

Route::get('/Setting', function () {
    return view('Setting Page');
});

Route::get('/CameraLocation', function () {
    return view('Add Camera');
});

Route::get('/try', function () {
    return view('try');
});

Route::get('/computervision/{gui.py}', function ($filename) {
    $path = public_path('computervision/' . $filename);
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        return response('File not found.', 404);
    }
});