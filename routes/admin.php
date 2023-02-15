<?php

use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard'], function() {

   /* Route::group(['as' => 'dashboard.auth.', 'prefix' => 'auth'], function () {
        Route::get('/', [LoginController::class, 'login'])->name('login');
        Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });*/

    Route::group(['middleware' => 'auth:admin'], function () {

        //DASHBOARD
        Route::group(['as' => 'dashboard.'], function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
        });

        //Users
        Route::group(['as' => 'dashboard.users.', 'prefix' => 'users'], function () {
            Route::resource('posts', UserController::class);
        });

        //Competitions
        Route::group(['as' => 'dashboard.users.', 'prefix' => 'users'], function () {
            Route::resource('competitions', CompetitionController::class);
        });

        Route::middleware(['auth', 'role.admin'])->group(function (){

        });

        //EQUIPMENTS
        /*Route::group(['as' => 'dashboard.matches.', 'prefix' => 'match'], function () {
            Route::get('/', [MatchController::class, 'index'])->name('index');
            Route::get('/new', [MatchController::class, 'create'])->name('create');
            Route::get('/{match}', [MatchController::class, 'edit'])->name('edit');
            Route::post('/', [MatchController::class, 'store'])->name('store');
            Route::put('/{equipment}', [MatchController::class, 'update'])->name('update');
            Route::delete('/{equipment}', [MatchController::class, 'destroy'])->name('delete');
        });*/

    });
});


require __DIR__.'/auth.php';
