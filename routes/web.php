<?php

use App\Http\Controllers\PlayerTotalController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeamController::class, 'index'])->name('team.index');
Route::get('/team-export', [TeamController::class, 'export'])->name('team.export');
Route::get('team-xml', [TeamController::class, 'xml'])->name('team.xml');

Route::get('/rosters', [RosterController::class, 'index'])->name('roster.index');
Route::get('/rosters-export', [RosterController::class, 'export'])->name('roster.export');
Route::get('/rosters-xml', [RosterController::class, 'xml'])->name('roster.xml');

Route::get('/players', [PlayerTotalController::class, 'index'])->name('player.index');
Route::get('/players-export', [PlayerTotalController::class, 'export'])->name('player.export');
Route::get('/players-xml', [PlayerTotalController::class, 'xml'])->name('player.xml');
