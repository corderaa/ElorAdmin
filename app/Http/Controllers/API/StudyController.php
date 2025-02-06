<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @OA\Tag(
 *     name="Studies",
 *     description="Operaciones relacionadas con los modulos"
 * )
 */

 class StudyController extends Controller
 {
     /**
      * @OA\Get(
      *     path="/api/studies",
      *     summary="Mostrar modulos",
      *     tags={"Studies"},
      *     @OA\Response(
      *         response=200,
      *         description="Mostrar todos los modulos."
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="Ha ocurrido un error."
      *     )
      * )
      */
     public function index()
     {
         $paginationCount = 10;
         $studies = Study::orderBy('created_at')->paginate($paginationCount);
 
         return response()->json(['studies'=>$studies])
             ->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Post(
      *     path="/api/studies",
      *     summary="Guardar modulo",
      *     tags={"Studies"},
      *     @OA\RequestBody(
      *         required=true,
      *         @OA\JsonContent(
      *             type="object",
      *             properties={
      *                 @OA\Property(property="name", type="string", description="Nombre del modulo"),
      *                 @OA\Property(property="description", type="string", description="Descripción del modulo")
      *             }
      *         )
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Guarda modulo nuevo."
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="Ha ocurrido un error."
      *     )
      * )
      */
     public function store(Request $request)
     {
         $study = new Study();
         $study->fill($request->all());
         $study->save();
 
         return response()->json(['study'=>$study])->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Get(
      *     path="api/studies/{study}",
      *     summary="Enseña un modulo",
      *     tags={"Studies"},
      *     @OA\Parameter(
      *         name="study",
      *         in="path",
      *         required=true,
      *         description="ID del modulo",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Enseña un modulo."
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="Ha ocurrido un error."
      *     )
      * )
      */
     public function show(Study $study)
     {
         return response()->json(['study'=>$study])->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Put(
      *     path="/api/studies/{study}",
      *     summary="Modificar un modulo",
      *     tags={"Studies"},
      *     @OA\Parameter(
      *         name="study",
      *         in="path",
      *         required=true,
      *         description="ID del modulo",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\RequestBody(
      *         required=true,
      *         @OA\JsonContent(
      *             type="object",
      *             properties={
      *                 @OA\Property(property="name", type="string", description="Nombre del modulo"),
      *                 @OA\Property(property="description", type="string", description="Descripción del modulo")
      *             }
      *         )
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Modifica un modulo."
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="Ha ocurrido un error."
      *     )
      * )
      */
     public function update(Request $request, Study $study)
     {
         $study->update($request->all());
         return response()->json(['study'=>$study])->setStatusCode(Response::HTTP_OK);
     }
 
     /**
      * @OA\Delete(
      *     path="api/studies/{study}",
      *     summary="Elimina un modulo",
      *     tags={"Studies"},
      *     @OA\Parameter(
      *         name="study",
      *         in="path",
      *         required=true,
      *         description="ID del modulo",
      *         @OA\Schema(type="integer")
      *     ),
      *     @OA\Response(
      *         response=200,
      *         description="Elimina un modulo."
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="Ha ocurrido un error."
      *     )
      * )
      */
     public function destroy(Study $study)
     {
         $study->delete();
         return response()->json(['message' => 'Modulo eliminado con éxito.'])->setStatusCode(Response::HTTP_OK);
     }
 }