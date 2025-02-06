<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserType $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserType $userType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserType $userType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        $authenticatedUser = Auth::user();
        if ($userType_id != 1 || $userType_id != 2 || $userType_id != 3 || $userType_id != 4) {
            $userType->delete();
        }

    return redirect()->route('users.adminIndex');
    }
}
