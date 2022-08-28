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
Route::get('/exercises/{search}', 'App\Http\Controllers\ExerciseController@retrieve');
Route::post('/exercises', 'App\Http\Controllers\ExerciseController@store');
Route::put('/exercises/{id}', 'App\Http\Controllers\ExerciseController@update');
Route::delete('/exercises/{id}', 'App\Http\Controllers\ExerciseController@destroy');

// Ejercicios - Sesiones
Route::get('/exercisesSessions', 'App\Http\Controllers\ExerciseSessionController@index');
Route::get('/exercisesSessions/{sessionId}', 'App\Http\Controllers\ExerciseSessionController@retrieve');
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
Route::get('/routines/{search}', 'App\Http\Controllers\RoutineController@retrieve');
Route::post('/routines', 'App\Http\Controllers\RoutineController@store');
Route::put('/routines/{id}', 'App\Http\Controllers\RoutineController@update');
Route::delete('/routines/{id}', 'App\Http\Controllers\RoutineController@destroy');

// Sesiones
Route::get('/sessions', 'App\Http\Controllers\SessionController@index');
Route::get('/sessions/{search}', 'App\Http\Controllers\SessionController@retrieve');
Route::post('/sessions', 'App\Http\Controllers\SessionController@store');
Route::put('/sessions/{id}', 'App\Http\Controllers\SessionController@update');
Route::delete('/sessions/{id}', 'App\Http\Controllers\SessionController@destroy');

// Sesiones - Rutinas
Route::get('/sessionsRoutines', 'App\Http\Controllers\SessionRoutineController@index');
Route::get('/sessionsRoutines/{routineId}', 'App\Http\Controllers\SessionRoutineController@retrieve');
Route::post('/sessionsRoutines', 'App\Http\Controllers\SessionRoutineController@store');
Route::put('/sessionsRoutines/{id}', 'App\Http\Controllers\SessionRoutineController@update');
Route::delete('/sessionsRoutines/{id}', 'App\Http\Controllers\SessionRoutineController@destroy');

// Usuarios
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::post('/users/{email}', 'App\Http\Controllers\UserController@retrieve');
Route::post('/users', 'App\Http\Controllers\UserController@store');
Route::put('/users/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('/users/{id}', 'App\Http\Controllers\UserController@destroy');