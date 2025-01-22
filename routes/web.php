<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\ShowUsers;
use App\Livewire\Cells\ShowCells;
use App\Livewire\Cells\CreateCell;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/users', ShowUsers::class)->name('users');
    Route::get('/cells', ShowCells::class)->name('cells');
    Route::get('/cells/create', CreateCell::class)->name('create-cells');
});

