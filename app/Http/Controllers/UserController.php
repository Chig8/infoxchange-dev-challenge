<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     * @param $requestData
     *
     */
    public function create($requestData)
    {
        $user = User::create([
            'name'             => strip_tags($requestData['name']),
            'email'            => $requestData['email'],
            'password'         => $requestData['password']
        ]);
        $user->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $user
     *
     */
    public function update(Request $request, User $user)
    {
        // code here
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}

