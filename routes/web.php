<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SourceController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events', [EventController::class, 'index'])->name('events');
    Route::get('/events/{eventId}', [EventController::class, 'show'])->name('event');

    Route::get('/people', [PersonController::class, 'show'])->name('people');
    Route::get('/people/{personId}', [PersonController::class, 'show'])->name('person');

    Route::get('/places', [PlaceController::class, 'show'])->name('places');
    Route::get('/places/{placeId}', [PlaceController::class, 'show'])->name('place');

    Route::get('sources', [SourceController::class, 'show'])->name('sources');
    Route::get('sources/{sourceId}', [SourceController::class, 'show'])->name('source');

});