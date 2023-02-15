<?php

use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

    Route::name('admin.')->prefix('dashboard')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('competitions', CompetitionController::class);
        Route::resource('teams', TeamController::class);
        Route::post('teams/sort', 'TeamController@sortTeams')->name('teams.sort');
    });





    //middlewre "admin", les routes auront comme name admin.user.create etc,
    // on y accède sur l'URL eFoot.test/dashboard/users
    Route::middleware(['admin'])->name('admin.')->prefix('dashboard')->group(function (){
        //Pour mapper les routes sur les functions

    });
});



/*Route::get('/dashboard', function () {
    return view('admin.adminDashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


/*Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::get('/{user}', [UserController::class, 'edit'])->name('edit');
Route::post('/', [UserController::class, 'store'])->name('store');
Route::put('/{user}', [UserController::class, 'update'])->name('update');
Route::delete('/{user}', [UserController::class, 'destroy'])->name('delete');*/



require __DIR__.'/auth.php';
