<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Study;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginationCount = 10;
        $subjects = Subject::paginate($paginationCount);

        return view('admin.subjects.index',['subjects' => $subjects ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $studies = Study::all();
        return view('admin.subjects.create',['studies' => $studies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $subject = new Subject();

        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->study_id = $request->study_id;


        $authenticatedUser = Auth::user();

        if ($authenticatedUser->userType_id == 1 || $authenticatedUser->userType_id == 2) {
            $subject->save();
        }
        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return view('admin.subjects.showSubject',['subject'=>$subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        $studies = Study::all();
        return view('admin.subjects.edit',['subject'=>$subject , 'studies' => $studies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->name = $request->name;
        $subject->description = $request->description;

        $authenticatedUser = Auth::user();

        if ($authenticatedUser->userType_id == 1 || $authenticatedUser->userType_id == 2) {
            $subject->save();
        }

        return view('admin.subjects.showSubject',['subject'=>$subject]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $authenticatedUser = Auth::user();

        if ($authenticatedUser->userType_id == 1 || $authenticatedUser->userType_id == 2) {
            $subject->delete();
        }
   
        return redirect()->route('subjects.index');
    }
}
