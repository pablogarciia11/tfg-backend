<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function retrieve(Request $request) 
    {   
        $user = User::where('email', $request->email)
                        ->get()->first();
        if($user && Hash::check($request->password, $user->password)) {                
            return $user;
        } else {
            return -1;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->fullName = $request->firstName . ' ' . $request->lastName;
        $user->email = $request->email;
        $user->userName = $request->userName;
        $user->password = Hash::make($request->password);
        $user->birth = $request->birth;
        $user->role = $request->role;
        $user->trainer = $request->trainer;

        $user->save();

        return $user;
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
        $user = User::findOrFail($request->id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->fullName = $request->firstName . ' ' . $request->lastName;
        $user->email = $request->email;
        $user->userName = $request->userName;
        $user->password = $request->password;
        $user->birth = $request->birth;
        $user->role = $request->role;
        $user->trainer = $request->trainer;

        $user->save();

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::destroy($request->id);
        return $user;
    }
}
