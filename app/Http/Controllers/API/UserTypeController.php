<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserTypeController extends Controller

{
    /**
     * @OA\Get(
     *     path="/api/usertypes",
     *     summary="Listar todos los tipos de usuario",
     *     tags={"UserTypes"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de tipos de usuario obtenida correctamente",
     *         @OA\JsonContent(
     *             type="object",
     *         )
     *     )
     * )
     */
    public function index()
    {
        $paginationCount = 10;
        $userType = UserType::orderBy('created_at')->paginate($paginationCount);

        return response()->json(['userType' => $userType], Response::HTTP_OK);
    }

    /**
     * @OA\Post(
     *     path="/api/usertypes",
     *     summary="Crear un nuevo tipo de usuario",
     *     tags={"UserTypes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string", example="Administrador"),
     *             @OA\Property(property="description", type="string", example="Tipo de usuario con privilegios administrativos."),
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Tipo de usuario creado correctamente"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $userType = new UserType();
        $userType->fill($request->all()); // Usa fill para asignar los datos
        $userType->save();

        return response()->json(['userType' => $userType], Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/usertypes/{id}",
     *     summary="Obtener detalles de un tipo de usuario",
     *     tags={"UserTypes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del tipo de usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tipo de usuario obtenido correctamente"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tipo de usuario no encontrado"
     *     )
     * )
     */
    public function show(UserType $userType)
    {
        return response()->json(['userType' => $userType], Response::HTTP_OK);
    }

    /**
     * @OA\Put(
     *     path="/api/usertypes/{id}",
     *     summary="Actualizar un tipo de usuario",
     *     tags={"UserTypes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del tipo de usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string", example="Editor"),
     *             @OA\Property(property="description", type="string", example="Tipo de usuario con permisos de edición."),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tipo de usuario actualizado correctamente"

     *     )
     * )
     */
    public function update(Request $request, UserType $userType)
    {
        $userType->update($request->all());
        return response()->json(['userType' => $userType], Response::HTTP_OK);
    }

    /**
     * @OA\Delete(
     *     path="/api/usertypes/{id}",
     *     summary="Eliminar un tipo de usuario",
     *     tags={"UserTypes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del tipo de usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tipo de usuario eliminado correctamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="UserType deleted successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tipo de usuario no encontrado"
     *     )
     * )
     */
    public function destroy(UserType $userType)
    {
        $userType->delete();
        return response()->json(['message' => 'UserType deleted successfully'], Response::HTTP_OK);
    }
}

