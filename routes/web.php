<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
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
    return view('index');
})->name('home');
Route::get('/login', function () {
    return redirect()->route('home');
})->name('login');

Route::post('/authentication', [AuthController::class, 'loginNis'])->name('authentication');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'vote'], function () {
        Route::prefix('vote')->name('vote.')->group(function () {
            Route::get('osis', [VoteController::class, 'voteOsis'])->name('osis');
            Route::get('mpk', [VoteController::class, 'voteMpk'])->name('mpk');
            Route::post('action', [VoteController::class, 'vote'])->name('action');
            Route::get('success', [VoteController::class, 'success'])->name('success');
        });
    });
    Route::group(['middleware' => 'admin'], function () {
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('logout', [AdminController::class, 'logout'])->name('logout');
            Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
            Route::prefix('kandidat')->name('kandidat.')->group(function () {
                Route::get('osis', [AdminController::class, 'kandidatosis'])->name('osis');
                Route::get('mpk', [AdminController::class, 'kandidatmpk'])->name('mpk');
            });
            Route::prefix('voting')->name('voting.')->group(function () {
                Route::get('osis', [AdminController::class, 'votingosis'])->name('osis');
                Route::get('mpk', [AdminController::class, 'votingmpk'])->name('mpk');
            });
        });
    });
});
