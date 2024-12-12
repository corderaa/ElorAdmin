<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;

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

        $rolePersonal = UserType::where('role','GOD')->first();
        $personal = User::where("userType_id", $rolePersonal->id)->count();

        if ($request->expectsJson()) {
            return response()->json($users);
        } else {
            return view('admin.index',['users' => $users, 'students' => $students, 'personal' => $personal]);
        }
    }

    public function studentIndex(Request $request)
    {
        $users = User::orderBy('created_at')->get();
        if ($request->expectsJson()) {
            return response()->json($users);
        } else {
            return view('/home',['users' => $users]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new User();
        
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->save();
        return view('users.show',['user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
    
}
