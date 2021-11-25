<?php

use App\Http\Livewire\Pilot;
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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/pilots', Pilot\Index::class)->name('pilots.index');
    Route::get('/pilots/create', Pilot\Create::class)->name('pilots.create');
});

require __DIR__.'/auth.php';
