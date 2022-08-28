<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $exercises = Exercise::orderBy('fullName')->get();
        return $exercises;
    }

    public function retrieve(Request $request) 
    {
        $exercises = Exercise::where('fullName', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('mainMuscle', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('secondMuscle', 'LIKE', '%'.$request->search.'%')
                                ->get();
        return $exercises;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercise = new Exercise();
        $exercise->name = $request->name;
        $exercise->equipment = $request->equipment;
        $exercise->fullName = $request->fullName;
        $exercise->mainMuscle = $request->mainMuscle;
        $exercise->secondMuscle = $request->secondMuscle;
        $exercise->description = $request->description;
        $exercise->createdBy = $request->createdBy;
        $exercise->video = $request->video;

        $exercise->save();

        return $exercise;
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
        $exercise = Exercise::findOrFail($request->id);
        $exercise->name = $request->name;
        $exercise->equipment = $request->equipment;
        $exercise->fullName = $request->fullName;
        $exercise->mainMuscle = $request->mainMuscle;
        $exercise->secondMuscle = $request->secondMuscle;
        $exercise->description = $request->description;
        $exercise->createdBy = $request->createdBy;
        $exercise->video = $request->video;

        $exercise->save();
        
        return $exercise;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $exercise = Exercise::destroy($request->id);
        return $exercise;
    }
}
