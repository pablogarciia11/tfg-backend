<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\User;

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

    public function retrieve(Request $request)
    {
        $session = Session::where('name', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('description', 'LIKE', '%'.$request->search.'%')
                                ->get();
        return $session;   
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

        $session = new Session();
        $session->name = $request->name;
        $session->description = $request->description;
        $session->date = $request->date;
        $session->completed = $request->completed;
        $session->userName = $user->firstName . ' ' . $user->lastName;
        $session->userId = $request->userId;
        $session->createdBy = $request->createdBy;

        $session->save();
        return $session;
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
        
        $session = Session::findOrFail($request->id);
        $session->name = $request->name;
        $session->description = $request->description;
        $session->date = $request->date;
        $session->completed = $request->completed;
        $session->userName = $user->firstName . ' ' . $user->lastName;
        $session->userId = $request->userId;
        $session->createdBy = $request->createdBy;

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
