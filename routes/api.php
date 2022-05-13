<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Actions\CompileStaticSite;
use App\Http\Controllers\Api\Actions\StartHydeServer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/actions/compile-static-site', CompileStaticSite::class)
    ->middleware('initialized')
    ->name('api.actions.compile-static-site');


Route::get('/actions/start-hyde-server', StartHydeServer::class)
    ->middleware('initialized')
    ->name('api.actions.start-hyde-server');