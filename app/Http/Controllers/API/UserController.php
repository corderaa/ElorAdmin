<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
* @OA\Info(
*     title="API ElorAdmin", 
*     version="1.0"
*)
*/
class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at')->get();

        return response()->json(['user'=>$user])
        ->setStatusCode(Response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $user = new User();
        $user = $request->all();
        $user->save();

        return response()->json(['user'=>$user])->setStatusCode(Response::HTTP_OK);
    }

    public function show(User $user)
    {
        return response()->json(['user'=>$user])->setStatusCode(Response::HTTP_OK);
    }

    public function update(Request $request, User $user)
    {
        $user = User::find($request->id);
        $user->update($request->all());
        return response()->json(['user'=>$user])->setStatusCode(Response::HTTP_OK);
    }

    public function destroy(User $user)
    {
        $user->delete(); 
        return response()->json(['deleted succesfully'])->setStatusCode(Response::HTTP_OK);
    }
}
