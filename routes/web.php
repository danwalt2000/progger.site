<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', [ProjectsController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'projects']);

Route::view('/about', 'pages.about');
Route::view('/experience', 'pages.experience');
Route::view('/about', 'pages.about');

Route::get('/projects/novozarievka', [ProjectsController::class, 'single']);
Route::get('/projects/{project}', [ProjectsController::class, 'single']
   )->where('project', 'novozarievka|sheeps|bustravel|15|infotech|mebel|drive-don|my-port|provence');

Route::permanentRedirect('/index', '/');
Route::permanentRedirect('/portfolio', '/projects');
Route::get('/misc/{any}', function() {
   return redirect('/');
})->where('any', '.*');

// Route::get('/en/blog', function() {
//    return redirect('/blog');
// });

// Route::permanentRedirect('/en/blog', '/blog' );
// Route::permanentRedirect('/en/blog/{post}', '/blog/{post}' );
Route::permanentRedirect('/{project}', '/projects/{project}'
   )->where('project', 'novozarievka|sheeps|bustravel|15|infotech|mebel|drive-don|my-port|provence');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
