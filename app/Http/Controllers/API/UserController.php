<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 * 
 */
/**
* @OA\Info(
*     title="API ElorAdmin", 
*     version="1.0"
*)
*@OA\Tag(
 *     name="Users",
 *     description="Operaciones relacionadas con los usuarios"
 * )
*/
 class UserController extends Controller
 {
     /**
      * @OA\Get(
      *     path="/api/users",
      *     summary="Listar usuarios",
      *     tags={"Users"},
      *     @OA\Response(
      *         response=200,
      *         description="Lista de usuarios obtenida correctamente"
      *     )
      * )
      */
     public function index()
     {
         $paginationCount = 10;
         $user = User::orderBy('created_at')->paginate($paginationCount);
 
         return response()->json(['user' => $user])
             ->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Post(
      *     path="/api/users",
      *     summary="Crear un nuevo usuario",
      *     tags={"Users"},
      *     @OA\RequestBody(
      *         required=true,
      *         @OA\JsonContent(
      *             type="object",
      *             @OA\Property(property="name", type="string", example="Juan Pérez"),
      *             @OA\Property(property="email", type="string", example="juan.perez@example.com"),
      *             @OA\Property(property="password", type="string", example="12345"),
      *         )
      *     ),
      *     @OA\Response(
      *         response=201,
      *         description="Usuario creado correctamente",
      *     )
      * )
      */
     public function store(Request $request)
     {
         $user = new User();
         $user = $request->all();
         $user->save();
 
         return response()->json(['user' => $user])->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Get(
      *     path="/api/users/{id}",
      *     summary="Mostrar usuario específico",
      *     tags={"Users"},
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         required=true,
      *         description="ID del usuario",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Usuario obtenido correctamente",
      *     ),
      *     @OA\Response(
      *         response=404,
      *         description="Usuario no encontrado"
      *     )
      * )
      */
     public function show(User $user)
     {
         return response()->json(['user' => $user])->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Put(
      *     path="/api/users/{id}",
      *     summary="Actualizar usuario",
      *     tags={"Users"},
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         required=true,
      *         description="ID del usuario",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\RequestBody(
      *         required=true,
      *         @OA\JsonContent(
      *             type="object",
      *             @OA\Property(property="name", type="string", example="Juan Pérez"),
      *             @OA\Property(property="email", type="string", example="juan.perez@nuevoemail.com"),
      *             @OA\Property(property="password", type="string", example="67890"),
      *         )
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Usuario actualizado correctamente",
      *     )
      * )
      */
     public function update(Request $request, User $user)
     {
         $user = User::find($request->id);
         $user->update($request->all());
         return response()->json(['user' => $user])->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Delete(
      *     path="/api/users/{id}",
      *     summary="Eliminar un usuario",
      *     tags={"Users"},
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         required=true,
      *         description="ID del usuario",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Usuario eliminado correctamente",
      *         @OA\JsonContent(
      *             type="object",
      *             @OA\Property(property="message", type="string", example="User deleted successfully")
      *         )
      *     ),
      *     @OA\Response(
      *         response=404,
      *         description="Usuario no encontrado"
      *     )
      * )
      */
     public function destroy(User $user)
     {
         $user->delete();
         return response()->json(['message' => 'User deleted successfully'], Response::HTTP_OK);
     }
 }