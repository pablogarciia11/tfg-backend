<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Microcycle;

class MicrocycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $microcycles = Microcycle::all();
        return $microcycles;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $microcycle = new Microcycle();
        $microcycle->number = $request->number;
        $microcycle->times = $request->times;
        $microcycle->routineId = $request->routineId;

        $microcycle->save();
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
        $microcycle = Microcycle::findOrFail($request->id);
        $microcycle->number = $request->number;
        $microcycle->times = $request->times;
        $microcycle->routineId = $request->routineId;

        $microcycle->save();
        return $microcycle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $microcycle = Microcycle::destroy($request->id);
        return $microcycle;
    }
}
