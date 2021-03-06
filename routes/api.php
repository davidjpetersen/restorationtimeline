<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Nova\Page;
use App\Models\Carousel;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/pages', function (Request $request) {
        return Page::all();
    });

    

});

Route::get('/carousel/{id}', function (Request $request, $id) {
    $carousel = Carousel::findOrFail($id);
    return $carousel;
});