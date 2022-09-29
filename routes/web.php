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
    return view('welcome');
});

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::post('/project', [App\Http\Controllers\ProjectController::class, 'store'])->name('project');
Route::delete('/project/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('/project/{project}');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
