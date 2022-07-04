<?php

namespace App\Http\Controllers;

use App\Models\UserSession;
use Illuminate\Http\Request;

class UserSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersSessions = UserSession::all();
        return $usersSessions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userSession = new UserSession();
        $userSession->date = $request->date;
        $userSession->userId = $request->userId;
        $userSession->sessionId = $request->sessionId;

        $userSession->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserSession  $userSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userSession = UserSession::findOrFail($request->id);
        $userSession->date = $request->date;
        $userSession->userId = $request->userId;
        $userSession->sessionId = $request->sessionId;

        $userSession->save();

        return $userSession;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSession  $userSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $userSession = UserSession::destroy($request->id);
        return $userSession;
    }
}
