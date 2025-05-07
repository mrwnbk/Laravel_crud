<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemons', [PokemonController::class, 'index']);
Route::get('/pokemons/create', [PokemonController::class, 'create']);
Route::post('/pokemons/poster', [PokemonController::class, 'store']);
Route::delete('/delete/{id}', [PokemonController::class, 'destroy']);

Route::get('/students', [StudentController::class, 'index']);
Route::post('/student/poster', [StudentController::class, 'store']);
Route::delete('/delete/{id}', [StudentController::class, 'destroy']);