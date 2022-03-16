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
        $exerciseSession->reps = $request->reps;
        $exerciseSession->rest = $request->rest;
        $exerciseSession->weight = $request->weight;
        $exerciseSession->isRIR = $request->isRIR;
        $exerciseSession->observations = $request->observations;
        $exerciseSession->sessionId = $request->sessionId;

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
        $exerciseSession->reps = $request->reps;
        $exerciseSession->rest = $request->rest;
        $exerciseSession->weight = $request->weight;
        $exerciseSession->isRIR = $request->isRIR;
        $exerciseSession->observations = $request->observations;
        $exerciseSession->sessionId = $request->sessionId;

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
