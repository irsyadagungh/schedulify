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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('signIn');
});

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/project', function () {
    return view('project.projectHome');
})->name('project');

Route::get('/projectDetail', function ()  {
    return view('project.detailProject');
})->name('detail-project');

Route::get('/listTask', function ()  {
    return view('project.listTaskProject');
})->name('list-task');

Route::get('/detailTask', function ()  {
    return view('detailTaskProject');
})->name('details-task');

