<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
     * Store a newly created resource in storage.
     */
        /**
    * @OA\Post(
    *     path="/api/studies",
    *     summary="Guardar modulo",
    *     tags={"Studies"},
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
        $study = $request->all();
        $study->save();

        return response()->json(['studies'=>$studies])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
         /**
    * @OA\Get(
    *     path="api/studies/{study}",
    *     summary="Enseña un modulo",
    *     tags={"Studies"},
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
        $study = Study::find($study->id);
        return response()->json(['study'=>$study])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
         /**
    * @OA\Post(
    *     path="/api/studies/{study}",
    *     summary="Modifica un modulo",
    *     tags={"Studies"},
    *     @OA\Response(
    *         response=200,
    *         description="Modificar un modulo."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function update(Request $request, Study $study)
    {
        $study = Study::find($request->id);
        $study->update($request->all());
        return response()->json(['study'=>$study])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
          /**
    * @OA\Delete(
    *     path="api/studies/{study}",
    *     summary="Elimina un modulo",
    *     tags={"Studies"},
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
        return response()->json(['deleted succesfully'])->setStatusCode(Response::HTTP_OK);
    }
}
