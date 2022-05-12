<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadmeController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/readme', ReadmeController::class)->name('readme');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard')->middleware('initialized');
Route::get('/dashboard/terminal', [DashboardController::class, 'terminal'])->name('dashboard.terminal')->middleware('initialized');

Route::get('/debug', DebugController::class);
