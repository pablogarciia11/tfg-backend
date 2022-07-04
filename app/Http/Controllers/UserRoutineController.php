<?php

namespace App\Http\Controllers;

use App\Models\UserRoutine;
use Illuminate\Http\Request;

class UserRoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersRoutines = UserRoutine::all();
        return $usersRoutines;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userRoutine = new UserRoutine();
        $userRoutine->date = $request->date;
        $userRoutine->userId = $request->userId;
        $userRoutine->routineId = $request->routineId;

        $userRoutine->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRoutine  $userRoutine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userRoutine = UserRoutine::findOrFail($request->id);
        $userRoutine->date = $request->date;
        $userRoutine->userId = $request->userId;
        $userRoutine->routineId = $request->routineId;

        $userRoutine->save();

        return $userRoutine;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRoutine  $userRoutine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $userRoutine = UserRoutine::destroy($request->id);
        return $userRoutine;
    }
}
