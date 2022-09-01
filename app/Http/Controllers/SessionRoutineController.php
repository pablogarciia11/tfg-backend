<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionRoutine;
use App\Models\Session;

class SessionRoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessionRoutines = SessionRoutine::all();
        return $sessionRoutines;
    }

    public function retrieve(Request $request)
    {
        $sessionRoutines = SessionRoutine::where('routineId', $request->routineId)->get();
        return $sessionRoutines;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $session = Session::find($request->sessionId);

        $sessionRoutine = new SessionRoutine();
        $sessionRoutine->name = $session->name;
        $sessionRoutine->day = $request->day;
        $sessionRoutine->weekDay = $request->weekDay;
        $sessionRoutine->date = $request->date;
        $sessionRoutine->completed = $request->completed;
        $sessionRoutine->userId = $request->userId;
        $sessionRoutine->sessionId = $request->sessionId;
        $sessionRoutine->routineId = $request->routineId;

        $sessionRoutine->save();
        return $sessionRoutine;
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
        $session = Session::find($request->sessionId);
        
        $sessionRoutine = SessionRoutine::findOrFail($request->id);;
        $sessionRoutine->name = $session->name;
        $sessionRoutine->day = $request->day;
        $sessionRoutine->weekDay = $request->weekDay;
        $sessionRoutine->date = $request->date;
        $sessionRoutine->completed = $request->completed;
        $sessionRoutine->userId = $request->userId;
        $sessionRoutine->sessionId = $request->sessionId;
        $sessionRoutine->routineId = $request->routineId;

        $sessionRoutine->save();
        return $sessionRoutine;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $sessionRoutine = SessionRoutine::destroy($request->id);
        return $sessionRoutine;
    }
}
