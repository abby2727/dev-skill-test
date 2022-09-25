<?php

use App\Http\Controllers\PlayerTotalController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeamController::class, 'index'])->name('team.index');
Route::get('/team-export', [TeamController::class, 'export'])->name('team.export');
Route::get('team-xml', [TeamController::class, 'xml'])->name('team.xml');
Route::get('team-json-format', [TeamController::class, 'json'])->name('team.json');

Route::get('/rosters', [RosterController::class, 'index'])->name('roster.index');
Route::get('/rosters/{id}', [RosterController::class, 'show'])->name('roster.show');
Route::get('/rosters-export', [RosterController::class, 'export'])->name('roster.export');
Route::get('/rosters-xml', [RosterController::class, 'xml'])->name('roster.xml');
Route::get('/rosters-json-format', [RosterController::class, 'json'])->name('roster.json');

Route::get('/players', [PlayerTotalController::class, 'index'])->name('player.index');
Route::get('/players/{player_id}', [PlayerTotalController::class, 'show'])->name('player.show');
Route::get('/players-export', [PlayerTotalController::class, 'export'])->name('player.export');
Route::get('/players-xml', [PlayerTotalController::class, 'xml'])->name('player.xml');
Route::get('/players-json-format', [PlayerTotalController::class, 'json'])->name('player.json');
