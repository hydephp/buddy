<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\Api\Actions\CompileStaticSite;
use App\Http\Controllers\Api\Actions\StartHydeServer;
use App\Http\Controllers\PostController;

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


Route::middleware('initialized')->group(function () {
    Route::get('/actions/compile-static-site', CompileStaticSite::class)
        ->name('api.actions.compile-static-site');

    Route::get('/actions/start-hyde-server', StartHydeServer::class)
        ->name('api.actions.start-hyde-server');

    Route::get('/posts/{slug}.json', function (string $slug) {
        return (new PostController)->json($slug);
    })->name('api.posts.json');

    Route::get('/posts/{slug}.md', function (string $slug) {
        return (new PostController)->markdown($slug);
    })->name('api.posts.markdown');
});

Route::get('/debug', DebugController::class);
