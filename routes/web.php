<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtatcivilController;
use App\Http\Controllers\EtablisementController;
use App\Http\Controllers\BacController;
use App\Http\Controllers\Bac3Controller;
use App\Http\Controllers\Bac5Controller;
use App\Http\Controllers\AttatchementController;
use App\Http\Controllers\ChoixController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//this is the etatcivil all routes *****************************************************

    Route::resource('etatcivils', EtatcivilController::class);

//this is the etablisement all routes *****************************************************

    // Route::post('/etablisements', [EtablismentController::class, 'store'])->name('etablisements.store');
    // Route::get('/etablisments/create', [EtablismentController::class, 'create'])->name('etablisments.create');
    Route::resource(name: 'etablisements', controller: App\Http\Controllers\EtablisementController::class);
    // Route::middleware(['auth'])->group(function () {
    //     // Your routes that require authentication here
    //     Route::get('/edit/{id}', App\Http\Controllers\EtablisementController::class)->name('etablisements.edit');
    // });

//this is the BAC all routes ************************************************************

        Route::resource('bacs', bacController::class);

//this is the BAC + 3  all routes ************************************************************
        Route::resource('bac3s', bac3Controller::class);

//this is the BAC + 5  all routes ************************************************************
        Route::resource('bac5s', bac5Controller::class);

//this is the Attatchements all routes ************************************************************
        Route::resource('attatchements', AttatchementController::class);

//this is the Resources  all routes ************************************************************         
        Route::resource('choixes', ChoixController::class);
        Route::delete('choixes/destroy', 'ChoixController@destroy')->name('choixes.destroy');

        // Route::resource('choixes', ChoixController::class);