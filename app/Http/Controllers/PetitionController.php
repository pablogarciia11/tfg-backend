<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petition;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitions = Petition::all();
        return $petitions;
    }

    public function retrieve(Request $request) {
        $petitions = Petition::where('sender', $request->sender)->get();
        return $petitions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petition = new Petition();

        $petition->date = $request->date;
        $petition->status = $request->status;
        $petition->sender = $request->sender;
        $petition->receiver = $request->receiver;

        $petition->save();
        return $petition;
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
        $petition = Petition::findOrFail($request->id);

        $petition->date = $request->date;
        $petition->status = $request->status;
        $petition->sender = $request->sender;
        $petition->receiver = $request->receiver;

        $petition->save();
        return $petition;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $petition = Petition::destroy($request->id);
        return $petition;
    }
}
