<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::all();
        return $sessions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $session = new Session();
        $session->name = $request->name;
        $session->objective = $request->objective;
        $session->length = $request->length;
        $session->date = $request->date;
        $session->description = $request->description;
        $session->createdBy = $request->createdBy;
        $session->assignedTo = $request->assignedTo;
        $session->routineId = $request->routineId;

        $session->save();
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
        $session = Session::findOrFail($request->id);
        $session->name = $request->name;
        $session->objective = $request->objective;
        $session->length = $request->length;
        $session->date = $request->date;
        $session->description = $request->description;
        $session->createdBy = $request->createdBy;
        $session->assignedTo = $request->assignedTo;
        $session->routineId = $request->routineId;

        $session->save();
        
        return $session;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $session = Session::destroy($request->id);
        return $session;
    }
}
