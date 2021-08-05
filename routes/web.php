<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdapterController;
// use App\Http\Controllers\MemberController;
// use App\Http\Controllers\PraetorianController;

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
    return redirect()->route("login");
});

/**
 * GET /profile
 * GET /class/{id?}
 * GET /materials
 * GET /classes
 * GET /members
 * hehe
 */

Route::middleware(['auth'])->group(function(){
    Route::get('/class', [AdapterController::class, 'class'])->name('class');
    Route::get('/profile', [AdapterController::class, 'profile'])->name('profile');
    Route::get('/material', [AdapterController::class, 'material'])->name('material');
    Route::get('/post/{id?}', [AdapterController::class, 'post'])->name('material');
});

require __DIR__.'/auth.php';
