<?php

use App\Livewire\Functionary;
use App\Livewire\FunctionariesTable;
use Illuminate\Support\Facades\Route;

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

Route::get('/functionaries-table',FunctionariesTable::class)->name('functionaries-home')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
Route::get('/functionary/{id}',Functionary::class)->name('functionary-info');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
