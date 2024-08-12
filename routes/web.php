<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->name('dashboard2');

Route::get('/addcontacts', function () {
    return view('addcontacts');
})->name('addcontacts');

Route::get('/image', function () {
    return view('image');
})->name('image');

Route::get('/delete', function () {
    return view('delete');
})->name('delete');

Route::post('/', [Controller::class, 'login']);
Route::get('/contacts', [Controller::class, 'getcontact']);
Route::get('/dashboard2', [Controller::class, 'getdashboard']);
Route::post('/addcontacts', [Controller::class, 'addcontacts']);
Route::post('/delete', [Controller::class, 'delete']);
Route::post('/image', [Controller::class, 'image']);
Route::get('/logout', [Controller::class, 'logout']);

