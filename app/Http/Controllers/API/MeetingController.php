<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Meeting_user_user;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meetings = Meeting_user_user::orderBy('created_at')->get();
    
        return response()->json(['meetings'=>$meetings])
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $meeting = new Meeting_user_user();
        $meeting = $request->all();
        $meeting->save();

        return response()->json(['meeting_user_user'=>$meeting])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Meeting_user_user $meeting_user_user)
    {
        $meeting_user_user = Meeting_user_user::find($meeting_user_user->id);
        return response()->json(['meeting_user_user'=>$meeting_user_user])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meeting_user_user $meeting_user_user)
    {
        $meeting_user_user = Meeting_user_user::find($request->id);
        $meeting_user_user->update($request->all());
        return response()->json(['meeting_user_user'=>$meeting_user_user])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meeting_user_user $meeting_user_user)
    {
        $meeting_user_user->delete();
        return response()->json(['deleted succesfully'])->setStatusCode(Response::HTTP_OK);
    }
}
