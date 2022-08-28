<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\User;

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

    public function retrieve(Request $request) {
        $routines = Routine::where('name', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('description', 'LIKE', '%'.$request->search.'%')
                                ->get();
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
        $user = User::find($request->userId);

        $routine = new Routine();
        $routine->name = $request->name;
        $routine->length = $request->length;
        $routine->startDate = $request->startDate;
        $routine->endDate = $request->endDate;
        $routine->description = $request->description;
        $routine->completed = $request->completed;
        if($user) {
            $routine->userName = $user->firstName . ' ' . $user->lastName;
        } else {
            $routine->userName = null;
        }        
        $routine->userId = $request->userId;
        $routine->createdBy = $request->createdBy;

        $routine->save();
        return $routine;
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
        $user = User::find($request->userId);

        $routine = Routine::findOrFail($request->id);
        $routine->name = $request->name;
        $routine->length = $request->length;
        $routine->startDate = $request->startDate;
        $routine->endDate = $request->endDate;
        $routine->description = $request->description;
        $routine->completed = $request->completed;
        if($user) {
            $routine->userName = $user->firstName . ' ' . $user->lastName;
        } else {
            $routine->userName = null;
        }  
        $routine->userId = $request->userId;
        $routine->createdBy = $request->createdBy;

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
