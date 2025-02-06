<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Meeting_user_user;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

    /**
 * @OA\Tag(
 *     name="Meetings",
 *     description="Operaciones relacionadas con las reuniones"
 * )
 */
class MeetingController extends Controller
{


/**
 * @OA\Get(
 *     path="/api/meetings",
 *     summary="Listar reuniones",
 *     tags={"Meetings"},
 *     @OA\Response(
 *         response=200,
 *         description="Lista de reuniones obtenida correctamente",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 properties={
 *                     @OA\Property(property="id", type="integer", description="ID de la reunión"),
 *                     @OA\Property(property="user_id", type="integer", description="ID del usuario"),
 *                     @OA\Property(property="meeting_date", type="string", format="date-time", description="Fecha y hora de la reunión"),
 *                     @OA\Property(property="status", type="string", description="Estado de la reunión")
 *                 }
 *             )
 *         )
 *     )
 * )
 */
public function index()
{
    $meetings = Meeting_user_user::orderBy('created_at')->get();

    return response()->json(['meetings' => $meetings])
        ->setStatusCode(Response::HTTP_OK);
}

/**
 * @OA\Post(
 *     path="/api/meetings",
 *     summary="Crear una nueva reunión",
 *     tags={"Meetings"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             required={"user_id", "meeting_date", "status"},
 *             @OA\Property(property="user_id", type="integer", description="ID del usuario relacionado con la reunión"),
 *             @OA\Property(property="meeting_date", type="string", format="date-time", description="Fecha y hora de la reunión"),
 *             @OA\Property(property="status", type="string", description="Estado de la reunión")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Reunión creada correctamente",
 *         @OA\JsonContent(
 *             type="object",
 *             properties={
 *                 @OA\Property(property="id", type="integer", description="ID de la reunión"),
 *                 @OA\Property(property="user_id", type="integer", description="ID del usuario"),
 *                 @OA\Property(property="meeting_date", type="string", format="date-time", description="Fecha y hora de la reunión"),
 *                 @OA\Property(property="status", type="string", description="Estado de la reunión")
 *             }
 *         )
 *     )
 * )
 */
public function store(Request $request)
{
    $meeting = new Meeting_user_user();
    $meeting->fill($request->all());
    $meeting->save();

    return response()->json(['meeting_user_user' => $meeting])->setStatusCode(Response::HTTP_OK);
}

/**
 * @OA\Get(
 *     path="/api/meetings/{meetingId}",
 *     summary="Obtener una reunión específica",
 *     tags={"Meetings"},
 *     @OA\Parameter(
 *         name="meetingId",
 *         in="path",
 *         required=true,
 *         description="ID de la reunión",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Detalles de la reunión obtenidos correctamente",
 *         @OA\JsonContent(
 *             type="object",
 *             properties={
 *                 @OA\Property(property="id", type="integer", description="ID de la reunión"),
 *                 @OA\Property(property="user_id", type="integer", description="ID del usuario"),
 *                 @OA\Property(property="meeting_date", type="string", format="date-time", description="Fecha y hora de la reunión"),
 *                 @OA\Property(property="status", type="string", description="Estado de la reunión")
 *             }
 *         )
 *     )
 * )
 */
public function show(Meeting_user_user $meeting_user_user)
{
    $meeting_user_user = Meeting_user_user::find($meeting_user_user->id);
    return response()->json(['meeting_user_user' => $meeting_user_user])->setStatusCode(Response::HTTP_OK);
}

/**
 * @OA\Put(
 *     path="/api/meetings/{meetingId}",
 *     summary="Actualizar reunión",
 *     tags={"Meetings"},
 *     @OA\Parameter(
 *         name="meetingId",
 *         in="path",
 *         required=true,
 *         description="ID de la reunión",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="user_id", type="integer", description="ID del usuario relacionado con la reunión"),
 *             @OA\Property(property="meeting_date", type="string", format="date-time", description="Fecha y hora de la reunión"),
 *             @OA\Property(property="status", type="string", description="Estado de la reunión")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Reunión actualizada correctamente",
 *         @OA\JsonContent(
 *             type="object",
 *             properties={
 *                 @OA\Property(property="id", type="integer", description="ID de la reunión"),
 *                 @OA\Property(property="user_id", type="integer", description="ID del usuario"),
 *                 @OA\Property(property="meeting_date", type="string", format="date-time", description="Fecha y hora de la reunión"),
 *                 @OA\Property(property="status", type="string", description="Estado de la reunión")
 *             }
 *         )
 *     )
 * )
 */
public function update(Request $request, Meeting_user_user $meeting_user_user)
{
    $meeting_user_user = Meeting_user_user::find($request->id);
    $meeting_user_user->update($request->all());
    return response()->json(['meeting_user_user' => $meeting_user_user])->setStatusCode(Response::HTTP_OK);
}

/**
 * @OA\Delete(
 *     path="/api/meetings/{meetingId}",
 *     summary="Eliminar reunión",
 *     tags={"Meetings"},
 *     @OA\Parameter(
 *         name="meetingId",
 *         in="path",
 *         required=true,
 *         description="ID de la reunión",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Reunión eliminada correctamente",
 *         @OA\JsonContent(
 *             type="object",
 *             properties={
 *                 @OA\Property(property="message", type="string", description="Mensaje de confirmación")
 *             }
 *         )
 *     )
 * )
 */
public function destroy(Meeting_user_user $meeting_user_user)
{
    $meeting_user_user->delete();
    return response()->json(['message' => 'Reunión eliminada correctamente'])->setStatusCode(Response::HTTP_OK);
}
}