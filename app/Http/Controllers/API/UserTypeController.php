<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserTypeController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginationCount = 10;
        $userType = UserType::orderBy('created_at')->paginate($paginationCount);

        return response()->json(['userType'=>$userType])
        ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userType = new UserType();
        $userType = $request->all();
        $userType->save();

        return response()->json(['userType'=>$userType])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserType $userType)
    {
        $userType = UserType::find($userType->id);
        return response()->json(['userType'=>$userType])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserType $userType)
    {
        $userType = UserType::find($request->id);
        $userType->update($request->all());
        return response()->json(['userType'=>$userType])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        $userType->delete();
        return response()->json(['deleted succesfully'])->setStatusCode(Response::HTTP_OK);
    }
}
