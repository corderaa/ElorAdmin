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
    /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     tags={"Users"},
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $user = User::orderBy('created_at')->get();

        return response()->json(['user'=>$user])
        ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user = $request->all();
        $user->save();

        return response()->json(['user'=>$user])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json(['user'=>$user])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
         /**
    * @OA\Post(
    *     path="/api/users/{user}",
    *     summary="Modifica un usuario",
    *     tags={"Users"},
    *     @OA\Response(
    *         response=200,
    *         description="Modificar un usuario."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function update(Request $request, User $user)
    {
        $user = User::find($request->id);
        $user->update($request->all());
        return response()->json(['user'=>$user])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete(); 
        return response()->json(['deleted succesfully'])->setStatusCode(Response::HTTP_OK);
    }
}
