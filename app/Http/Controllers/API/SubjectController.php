<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @OA\Tag(
 *     name="Subjects",
 *     description="Operaciones relacionadas con las asignaturas"
 * )
 */

 class SubjectController extends Controller
 {
     /**
      * @OA\Get(
      *     path="/api/subjects",
      *     summary="Listar asignaturas",
      *     tags={"Subjects"},
      *     @OA\Response(
      *         response=200,
      *         description="Lista de asignaturas obtenida correctamente"
      *     )
      * )
      */
     public function index()
     {
         $paginationCount = 10;
         $subjects = Subject::orderBy('created_at')->paginate($paginationCount);
 
         return response()->json(['subjects' => $subjects], Response::HTTP_OK);
     }
 
     /**
      * @OA\Post(
      *     path="/api/subjects",
      *     summary="Crear una nueva asignatura",
      *     tags={"Subjects"},
      *     @OA\RequestBody(
      *         required=true,
      *         @OA\JsonContent(
      *             type="object",
      *             @OA\Property(property="name", type="string", example="Matemáticas"),
      *             @OA\Property(property="description", type="string", example="Asignatura de Matemáticas."),
      *         )
      *     ),
      *     @OA\Response(
      *         response=201,
      *         description="Asignatura creada correctamente",
      *     )
      * )
      */
     public function store(Request $request)
     {
         $subject = new Subject();
         $subject->fill($request->all()); // Utiliza fill para asignar los datos
         $subject->save();
 
         return response()->json(['subject' => $subject], Response::HTTP_CREATED);
     }
 
     /**
      * @OA\Get(
      *     path="/api/subjects/{id}",
      *     summary="Mostrar asignatura específica",
      *     tags={"Subjects"},
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         required=true,
      *         description="ID de la asignatura",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Asignatura obtenida correctamente",
      *     ),
      *     @OA\Response(
      *         response=404,
      *         description="Asignatura no encontrada"
      *     )
      * )
      */
     public function show(Subject $subject)
     {
         return response()->json(['subject' => $subject], Response::HTTP_OK);
     }
 
     /**
      * @OA\Put(
      *     path="/api/subjects/{id}",
      *     summary="Actualizar asignatura",
      *     tags={"Subjects"},
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         required=true,
      *         description="ID de la asignatura",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\RequestBody(
      *         required=true,
      *         @OA\JsonContent(
      *             type="object",
      *             @OA\Property(property="name", type="string", example="Historia"),
      *             @OA\Property(property="description", type="string", example="Asignatura de Historia."),
      *         )
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Asignatura actualizada correctamente",
      *     )
      * )
      */
     public function update(Request $request, Subject $subject)
     {
         $subject->update($request->all());
         return response()->json(['subject' => $subject], Response::HTTP_OK);
     }
 
     /**
      * @OA\Delete(
      *     path="/api/subjects/{id}",
      *     summary="Eliminar una asignatura",
      *     tags={"Subjects"},
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         required=true,
      *         description="ID de la asignatura",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Asignatura eliminada correctamente",
      *         @OA\JsonContent(
      *             type="object",
      *             @OA\Property(property="message", type="string", example="Subject deleted successfully")
      *         )
      *     ),
      *     @OA\Response(
      *         response=404,
      *         description="Asignatura no encontrada"
      *     )
      * )
      */
     public function destroy(Subject $subject)
     {
         $subject->delete();
         return response()->json(['message' => 'Subject deleted successfully'], Response::HTTP_OK);
     }
 }