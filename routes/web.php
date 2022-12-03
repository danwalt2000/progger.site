<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::view('/about', 'pages.about');
Route::view('/projects', 'pages.projects');
Route::view('/experience', 'pages.experience');
Route::view('/about', 'pages.about');
Route::view('/projects/novozarievka', 'projects.novozarievka');
Route::view('/projects/sheeps', 'projects.sheeps');
Route::view('/projects/bustravel', 'projects.bustravel');
Route::view('/projects/15', 'projects.15');
Route::view('/projects/infotech', 'projects.infotech');
Route::view('/projects/mebel', 'projects.mebel');
Route::view('/projects/drive-don', 'projects.drive-don');
Route::view('/projects/my-port', 'projects.my-port');

Route::permanentRedirect('/portfolio', '/projects');
Route::permanentRedirect('/novozarievka', '/projects/novozarievka');
Route::permanentRedirect('/sheeps', '/projects/sheeps');
Route::permanentRedirect('/bustravel', '/projects/bustravel');
Route::permanentRedirect('/15', '/projects/15');
Route::permanentRedirect('/infotech', '/projects/infotech');
Route::permanentRedirect('/mebel', '/projects/mebel');
Route::permanentRedirect('/drive-don', '/projects/drive-don');
Route::permanentRedirect('/my-port', '/projects/my-port');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
