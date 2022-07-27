<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Muscle;
use DB;

class MuscleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muscles = Muscle::all();
        return $muscles;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $muscle = new Muscle();
        $muscle->name = $request->name;
        $muscle->type = $request->type;
        $muscle->exerciseId = $request->exerciseId;

        $muscle->save();
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
        $muscle = Muscle::findOrFail($request->id);
        $muscle->name = $request->name;
        $muscle->type = $request->type;
        $muscle->exerciseId = $request->exerciseId;

        $muscle->save();

        return $muscle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $muscle = Request::destroy($request->id);
        return $request;
    }
}
