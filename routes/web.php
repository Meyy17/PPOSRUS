<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

//IndexScreen
Route::get('/', function () {
    return view('index');
})->name('index');

//Authentication
Route::get('/login', function () {
    return redirect()->route('index');
})->name('login');

Route::get('/admin/login', function () {
    return view('admin/login');
})->name('admin.auth');

//AuthAction
Route::post('/authentication', [AuthController::class, 'loginNis'])->name('authentication');

Route::post('/admin/authentication', [AuthController::class, 'loginAdmin'])->name('authentication.admin');

//Required Auth
Route::group(['middleware' => 'auth'], function () {

    //Rules Vote
    Route::group(['middleware' => 'vote'], function () {

        Route::prefix('vote')->name('vote.')->group(function () {
            Route::get('osis', [VoteController::class, 'voteOsis'])->name('osis');
            Route::get('mpk', [VoteController::class, 'voteMpk'])->name('mpk');
            Route::post('action', [VoteController::class, 'vote'])->name('action');
            Route::get('success', [VoteController::class, 'success'])->name('success');
        });
        
    });

    //Only Admin
    Route::group(['middleware' => 'admin'], function () {

        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('logout', [AuthController::class, 'logout'])->name('logout');

            Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

            Route::prefix('kandidat')->name('kandidat.')->group(function () {

                Route::get('osis', [AdminController::class, 'kandidatosis'])->name('osis');

                Route::get('mpk', [AdminController::class, 'kandidatmpk'])->name('mpk');

                Route::prefix('create')->name('create.')->group(function () {

                    Route::get('osis', function () {
                        return view('admin/kandidat/create/osis');
                    })->name('osis');

                    Route::post('osis/action', [AdminController::class, 'createosis'])->name('osis.action');

                    Route::get('mpk', function () {
                        return view('admin/kandidat/create/mpk');
                    })->name('mpk');
                    
                    Route::post('mpk/action', [AdminController::class, 'creatempk'])->name('mpk.action');
                });

                Route::prefix('delete')->name('delete.')->group(function () {
                    Route::get('osis/{id}', [AdminController::class, 'destroyosis'])->name('osis');
                    Route::get('mpk/{id}', [AdminController::class, 'destroympk'])->name('mpk');
                });

            });

            Route::prefix('voting')->name('voting.')->group(function () {
                Route::get('osis', [AdminController::class, 'votingosis'])->name('osis');
                Route::get('mpk', [AdminController::class, 'votingmpk'])->name('mpk');
            });

        });

    });

});
