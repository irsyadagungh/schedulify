<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleProjectController;
use App\Http\Controllers\SchedulePersonalNoteController;

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

// register route
Route::get('/register',[RegisterController::class,'showRegistrationForm']);
Route::post('/registerPost',[RegisterController::class,'register'])->name('reg');

// login route
Route::get('/login',[LoginController::class,'showLoginForm'])->name('ls');
Route::post('/loginPost',[LoginController::class,'login'])->name('login');

// home route
// Route::get('/home', function () {
//     return view('home');
// })->name('home');
Route::get('/home',[SchedulePersonalNoteController::class,'home'])->name('home');


// Profile
Route::get('/profile',[ProfileController::class,'edit'])->name('p');
Route::put('/profilePost',[ProfileController::class,'update'])->name('pp');

// Project
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
    return view('project.detailTaskProject');
})->name('details-task');

Route::get('/listTaskUser', function ()  {
    return view('project.user.list-task-user');
})->name('list-task-user');



// Personal
Route::get('/personal',[SchedulePersonalNoteController::class,'index'])->name('personal');
Route::post('/personalPost',[SchedulePersonalNoteController::class,'store'])->name('plStore');


Route::get('/personallihatsemua', function ()  {
    return view('personal.todaylihatsemua');
})->name('todaylihatsemua');

Route::get('/comingsoonlihatsemua', function ()  {
    return view('personal.comingsoonlihatsemua');
})->name('comingsoonlihatsemua');

Route::get('/prioritaslihatsemua', function ()  {
    return view('personal.prioritaslihatsemua');
})->name('prioritaslihatsemua');

Route::get('/donelihatsemua', function ()  {
    return view('personal.donelihatsemua');
})->name('donelihatsemua');

Route::get('/kadaluwarsalihatsemua', function ()  {
    return view('personal.kadaluwarsalihatsemua');
})->name('kadaluwarsalihatsemua');

Route::get('/listTaskUser', function ()  {
    return view('project.user.list-task-user');
})->name('list-task-user');

// Profile
Route::get('/profile', function ()  {
    return view('profile');
})->name('profile');

// Personal

// Route::get('/personal', function () {
//     return view('personal.personal');
// })->name('personal');

Route::get('/personallihatsemua', function ()  {
    return view('personal.todaylihatsemua');
})->name('todaylihatsemua');

Route::get('/comingsoonlihatsemua', function ()  {
    return view('personal.comingsoonlihatsemua');
})->name('comingsoonlihatsemua');

Route::get('/prioritaslihatsemua', function ()  {
    return view('personal.prioritaslihatsemua');
})->name('prioritaslihatsemua');

Route::get('/donelihatsemua', function ()  {
    return view('personal.donelihatsemua');
})->name('donelihatsemua');

Route::get('/kadaluwarsalihatsemua', function ()  {
    return view('personal.kadaluwarsalihatsemua');
})->name('kadaluwarsalihatsemua');

// Route Project
Route::controller(ScheduleProjectController::class)->group(function () {
    Route::get('/scheduleProject', 'index');
    Route::get('/scheduleProject/show/{id}', 'show');
    Route::post('/scheduleProject/store', 'store');
    Route::post('/scheduleProject/edit/{id}', 'edit');
    Route::post('/scheduleProject/update/{id}', 'update');
    Route::delete('/scheduleProject/delete/{id}', 'delete');
});
