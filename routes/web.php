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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'disableBackBtn'],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/match-form', [App\Http\Controllers\MatchesController::class, 'index'])->middleware(['can:isAdmin'])->name('matchForm');

Route::post('/match-store', [App\Http\Controllers\MatchesController::class, 'matchStore'])->name('matchstore');

Route::get('/team-form', [App\Http\Controllers\TeamnamesController::class, 'create'])->middleware(['can:isAdmin'])->name('teamForm');

Route::post('/team-store', [App\Http\Controllers\TeamnamesController::class, 'teamStore'])->name('team-store');

Route::get('/show-player',[App\Http\Controllers\PlayersController::class, 'showPlayers'])->name('show-player');

Route::get('/show-matches',[App\Http\Controllers\MatchesController::class, 'showMatch'])->name('show-match');

Route::get('/team-Score',[App\Http\Controllers\ScoreController::class,'create'])->name('team-Score');

Route::post('/Store-Score',[App\Http\Controllers\ScoreController::class,'store'])->name('store-Score');

Route::get('/show-Score',[App\Http\Controllers\ScoreController::class,'showScore'])->name('show-Score');

});

