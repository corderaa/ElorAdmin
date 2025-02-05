<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $paginationCount = 10;
        $studies = Study::paginate($paginationCount);

        return view('admin.studies.index',['studies' => $studies ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.studies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $study = new Study();

        $study->name = $request->name;
        $study->description = $request->description;

        $authenticatedUser = Auth::user();

        if ($user->userTypes->role != "GOD" && $authenticatedUser->userTypes->role == "GOD" || $authenticatedUser->userTypes->role == "ADMIN") {
            $study->save();
        }

        return redirect()->route('studies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Study $study)
    {
        return view('admin.studies.showStudy',['study'=>$study]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Study $study)
    {
        return view('admin.studies.edit',['study'=>$study]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Study $study)
    {
        $study->name = $request->name;
        $study->description = $request->description;

        $authenticatedUser = Auth::user();

        if ($user->userTypes->role != "GOD" && $authenticatedUser->userTypes->role == "GOD" || $authenticatedUser->userTypes->role == "ADMIN") {
            $study->save();
        }

        return view('admin.studies.showStudy',['study'=>$study]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(study $study)
    {
        $authenticatedUser = Auth::user();

        if ($user->userTypes->role != "GOD" && $authenticatedUser->userTypes->role == "GOD" || $authenticatedUser->userTypes->role == "ADMIN") {
            $study->delete();
        }

        return redirect()->route('studies.index');
    }
}
