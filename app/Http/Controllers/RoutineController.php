<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routines = Routine::all();
        return $routines;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $routine = new Routine();
        $routine->name = $request->name;
        $routine->objective = $request->objective;
        $routine->frecuence = $request->frecuence;
        $routine->description = $request->description;
        $routine->daysAWeek = $request->daysAWeek;
        $routine->createdBy = $request->createdBy;
        $routine->assignedTo = $request->assignedTo;

        $routine->save();
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
        $routine = Routine::findOrFail($request->id);
        $routine->name = $request->name;
        $routine->objective = $request->objective;
        $routine->frecuence = $request->frecuence;
        $routine->description = $request->description;
        $routine->daysAWeek = $request->daysAWeek;
        $routine->createdBy = $request->createdBy;
        $routine->assignedTo = $request->assignedTo;

        $routine->save();
        
        return $routine;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $routine = Routine::destroy($request->id);
        return $routine;
    }
}
