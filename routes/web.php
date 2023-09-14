<?php

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
});
Route::post('/authentication', function () {
    return redirect()->route('vote.osis');
})->name('authentication');
Route::prefix('vote')->name('vote.')->group(function () {
    Route::get('osis', [VoteController::class, 'voteOsis'])->name('osis');
    Route::get('mpk', [VoteController::class, 'voteMpk'])->name('mpk');
    Route::post('action', [VoteController::class, 'vote'])->name('action');
    Route::get('success', [VoteController::class, 'success'])->name('success');
});
