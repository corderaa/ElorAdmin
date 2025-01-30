<?php

namespace App\Http\Controllers;

use App\Models\Meeting_user_user;
use App\Models\User;
use Illuminate\Http\Request;

class MeetingUserUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $paginationCount = 10;
        $meetings_user_user = Meeting_user_user::paginate($paginationCount);

        return view('admin.meetings.index',['meetings_user_user' => $meetings_user_user, 'users'=> $users ]);

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
    public function show(Meeting_user_user $meeting_user_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meeting_user_user $meeting_user_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meeting_user_user $meeting_user_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meeting_user_user $meeting_user_user)
    {
        //
    }
}
