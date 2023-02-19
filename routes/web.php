<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamePlayerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('csv', [GamePlayerController::class, 'export'])->name('generate-csv');
});

Route::get('/', [GamePlayerController::class, 'index']);
Route::get('results/{player}', [GamePlayerController::class, 'show'])->name('share-url');

// Route::post('/initiate-game', [GamePlayerController::class, 'initiateGame'])->name('initiate-game');
Route::get('/start-game/{player}', [GamePlayerController::class, 'startGame'])->name('start-game');
Route::post('/end-game/{player}', [GamePlayerController::class, 'endGame'])->name('end-game');

Route::get('/top-ten', [GamePlayerController::class, 'topTen'])->name('top-ten');
