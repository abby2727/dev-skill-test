<?php

use App\Http\Controllers\PlayerTotalController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeamController::class, 'index'])->name('team.index');
Route::get('/rosters', [RosterController::class, 'index'])->name('roster.index');
Route::get('/players', [PlayerTotalController::class, 'index'])->name('player.index');
