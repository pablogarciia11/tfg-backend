<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::all();
        return $informations;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information = new Information();
        $information->date = $request->date;
        $information->height = $request->height;
        $information->weight = $request->weight;
        $information->userId = $request->userId;

        $information->save();
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
        $information = Information::findOrFail($request->id);
        $information->date = $request->date;
        $information->height = $request->height;
        $information->weight = $request->weight;
        $information->userId = $request->userId;

        $information->save();
        
        return $information;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $information = Information::destroy($request->id);
        return $information;
    }
}
