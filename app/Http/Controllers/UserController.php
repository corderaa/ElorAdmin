<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Study;
use App\Models\UserType;
use App\Models\Subject;
use App\Models\Meeting_user_user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminIndex(Request $request)
    {
        $users = User::orderBy('created_at')->get();
        $role = UserType::where('role','USER')->first();
        $students = User::where("userType_id", $role->id)->count();

        $rolePersonal = UserType::where('role','USER')->first();
        $personal = User::whereNot("userType_id", $rolePersonal->id)->count();

        $studies = Study::count();

        $subjects = Subject::count();

        $usersWithNoRole = User::where('userType_id', 'null')->count();

        $date = date('m/d/Y h:i:s a', time());
        $meeting = Meeting_user_user::where('day', '>', $date)->count();

        //$meetingToday= Meeting_user_user::where('day',$date, 'first_user_id', 3)->count();

        if ($request->expectsJson()) {
            return response()->json($users);
        } else {
            return view('admin.index',['users' => $users, 'students' => $students, 'personal' => $personal, 'studies' => $studies, 'subjects' => $subjects, 'usersWithNoRole' => $usersWithNoRole, 'meeting' => $meeting]);
        }
    }

    public function getAllStudent(Request $request)
    {

            $paginationCount = 10;
            $students = User::where('userType_id', 4)->paginate($paginationCount);

            return view('admin.student.index',['students' => $students ]);

        //return view('admin.student.index', compact('students'));

    }
    public function getStaff(Request $request)
    {
        $paginationCount = 10;
        $staff = User::whereNot('userType_id', 4)->paginate($paginationCount);

        return view('admin.staff.index',['staff' => $staff ]);
    }

    public function studentIndex(Request $request)
    {
    //$userType = Auth::user()->userTypes;
    //$teachers = null;
    //
    //function getTeacher(){
    //    $teachers = DB::table("subject_user_schedules as sus")
    //->join("users as u", function($join){
    //	$join->on("sus.user_id", "=", "u.id");
    //})
    //->join("subjects as s", function($join){
    //	$join->on("sus.subject_id", "=", "s.id");
    //})
    //->select("u.name", "u.email")
    //->where("s.id", "=", 1)
    //->get();
    //}
        $authenticatedUser = Auth::user();
        $studies = $authenticatedUser->studies;
        return view('/home',['user' => $authenticatedUser, 'studies'=>$studies]);
    }

    function getTeacher(User $authenticatedUser){
        $teachers = DB::table("subject_user_schedules as sus")
        ->join("users as u", function($join){
        	$join->on("sus.user_id", "=", "u.id");
        })
        ->join("subjects as s", function($join){
        	$join->on("sus.subject_id", "=", "s.id");
        })
        ->select("u.name", "u.email")
        ->where("s.id", "=", 1)
        ->get();

        return $teachers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->lastNames = $request->lastNames;
        $user->DNI = $request->DNI;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->userType_id = $request->userType_id;
        $user->password = 123;

        $authenticatedUser = Auth::user();

        if ($authenticatedUser->userTypes->role == "GOD" || $authenticatedUser->userTypes->role == "ADMIN") {
            $user->save();
        }
        
        return redirect()->route('users.adminIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.showuser',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->lastNames = $request->lastNames;
        $user->DNI = $request->DNI;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->phone;
        $user->userType_id = $request->userType_id;

        $authenticatedUser = Auth::user();

        if ($authenticatedUser->userTypes->role == "GOD" || $authenticatedUser->userTypes->role == "ADMIN") {
            $user->save();
        }

        return view('admin.showuser',['user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

        $authenticatedUser = Auth::user();

        if ($user->userTypes->role != "GOD" && $authenticatedUser->userTypes->role == "GOD" || $authenticatedUser->userTypes->role == "ADMIN") {
            $user->delete();
        }   

        return redirect()->route('users.adminIndex');
    }

}
