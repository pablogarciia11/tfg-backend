<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ejercicios
Route::get('/exercises', 'App\Http\Controllers\ExerciseController@index');
Route::get('/exercises/{id}', 'App\Http\Controllers\ExerciseController@retrieve');
Route::post('/exercises', 'App\Http\Controllers\ExerciseController@store');
Route::put('/exercises/{id}', 'App\Http\Controllers\ExerciseController@update');
Route::delete('/exercises/{id}', 'App\Http\Controllers\ExerciseController@destroy');

// Grupos musculares
Route::get('/muscles', 'App\Http\Controllers\MuscleController@index');
Route::get('/muscles/{id}', 'App\Http\Controllers\MuscleController@retrieve');
Route::post('/muscles', 'App\Http\Controllers\MuscleController@store');
Route::put('/muscles/{id}', 'App\Http\Controllers\MuscleController@update');
Route::delete('/muscles/{id}', 'App\Http\Controllers\MuscleController@destroy');

// Ejercicios - Sesiones
Route::get('/exercisesSessions', 'App\Http\Controllers\ExerciseSessionController@index');
Route::post('/exercisesSessions', 'App\Http\Controllers\ExerciseSessionController@store');
Route::put('/exercisesSessions/{id}', 'App\Http\Controllers\ExerciseSessionController@update');
Route::delete('/exercisesSessions/{id}', 'App\Http\Controllers\ExerciseSessionController@destroy');

// Información
Route::get('/informations', 'App\Http\Controllers\InformationController@index');
Route::post('/informations', 'App\Http\Controllers\InformationController@store');
Route::put('/informations/{id}', 'App\Http\Controllers\InformationController@update');
Route::delete('/informations/{id}', 'App\Http\Controllers\InformationController@destroy');

// Rutinas
Route::get('/routines', 'App\Http\Controllers\RoutineController@index');
Route::post('/routines', 'App\Http\Controllers\RoutineController@store');
Route::put('/routines/{id}', 'App\Http\Controllers\RoutineController@update');
Route::delete('/routines/{id}', 'App\Http\Controllers\RoutineController@destroy');

// Sesiones
Route::get('/sessions', 'App\Http\Controllers\SessionController@index');
Route::post('/sessions', 'App\Http\Controllers\SessionController@store');
Route::put('/sessions/{id}', 'App\Http\Controllers\SessionController@update');
Route::delete('/sessions/{id}', 'App\Http\Controllers\SessionController@destroy');