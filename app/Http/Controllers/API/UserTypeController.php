<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserTypeController extends Controller
{
    public function index()
    {
        $userType = UserType::orderBy('created_at')->get();

        return response()->json(['userType' => $userType], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $userType = new UserType();
        $userType->fill($request->all()); // Usa fill para asignar los datos
        $userType->save();

        return response()->json(['userType' => $userType], Response::HTTP_CREATED);
    }

    public function show(UserType $userType)
    {
        return response()->json(['userType' => $userType], Response::HTTP_OK);
    }
    public function update(Request $request, UserType $userType)
    {
        $userType->update($request->all());
        return response()->json(['userType' => $userType], Response::HTTP_OK);
    }

    public function destroy(UserType $userType)
    {
        $userType->delete();
        return response()->json(['message' => 'UserType deleted successfully'], Response::HTTP_OK);
    }
}

