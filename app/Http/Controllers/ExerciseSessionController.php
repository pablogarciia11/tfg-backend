<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExerciseSession;

class ExerciseSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercisesSessions = ExerciseSession::all();
        return $exercisesSessions;
    }

    public function retrieve(Request $request) 
    {
        $exercisesSession = ExerciseSession::where('sessionId', $request->sessionId)
                                                ->get();
        return $exercisesSession;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exerciseSession = new ExerciseSession();
        $exerciseSession->exerciseId = $request->exerciseId;
        $exerciseSession->name = $request->name;
        $exerciseSession->series = $request->series;
        $exerciseSession->minReps = $request->minReps;
        $exerciseSession->maxReps = $request->maxReps;
        $exerciseSession->rest = $request->rest;
        $exerciseSession->RIR = $request->RIR;
        $exerciseSession->observations = $request->observations;
        $exerciseSession->sessionId = $request->sessionId;
        $exerciseSession->sessionRoutineId = $request->sessionRoutineId;

        $exerciseSession->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $exerciseSession = ExerciseSession::findOrFail($request->id);
        $exerciseSession->exerciseId = $request->exerciseId;
        $exerciseSession->name = $request->name;
        $exerciseSession->series = $request->series;
        $exerciseSession->minReps = $request->minReps;
        $exerciseSession->maxReps = $request->maxReps;
        $exerciseSession->rest = $request->rest;
        $exerciseSession->RIR = $request->RIR;
        $exerciseSession->observations = $request->observations;
        $exerciseSession->sessionId = $request->sessionId;
        $exerciseSession->sessionRoutineId = $request->sessionRoutineId;

        $exerciseSession->save();
        
        return $exerciseSession;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $exerciseSession = ExerciseSession::destroy($request->id);
        return $exerciseSession;
    }
}
