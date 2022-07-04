<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\SessionDay;

class SessionDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessionDays = SessionDay::all();
        return $sessionDays;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sessionDay = new SessionDay();
        $sessionDay->day = $request->id;
        $sessionDay->microcycleId = $request->microcycleId;

        $sessionDay->save();
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
        $sessionDay = SessionDay::findOrFail($request->id);
        $sessionDay->day = $request->id;
        $sessionDay->microcycleId = $request->microcycleId;

        $sessionDay->save();
        return $sessionday;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $sessionDay = SessionDay::destroy($request->id);
        return $sessionDay;
    }
}
