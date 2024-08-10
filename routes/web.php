<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/addcontacts', function () {
    return view('addcontacts');
})->name('addcontacts');


Route::post('/', [Controller::class, 'login']);
Route::get('/contacts', [Controller::class, 'getcontact']);
Route::post('/addcontacts', [Controller::class, 'addcontacts']);
