<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all users
            $users = User::all();

        // Get all roles
            $roles = Role::all();


        // Get the total number of users
            $usersCount = User::count();

        // Get the total number of users with admin role
            $adminCount = User::role('admin')->count();

        // Get the total number of users with user role
            $userCount = User::role('user')->count();

        // Get the total number of users with coach role
            $coachCount = User::role('coach')->count();

        // Return view
            return view('users.user', compact('users', 'roles', 'usersCount', 'adminCount', 'userCount', 'coachCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store a new user
        $user = User::create($request->all());

        // assign role  to user
        $user->assignRole($request->role);

        // return view flash success message
        return redirect()->back()->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    // Get the user
    $user = User::findOrFail($id);

    // Get all roles
    $roles = Role::all();

    // Get the total number of users
    $userCount = User::count();

    // Get the total number of users with admin role
    $adminCount = User::role('admin')->count();

    // Get the total number of users with user role
    $userCount = User::role('user')->count();

    // Get the total number of users with coach role
    $coachCount = User::role('coach')->count();

    // Return view
    return view('maindash', compact('user', 'roles', 'userCount', 'adminCount', 'userCount', 'coachCount'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return ajax response with user data and role of user
        return response()->json([
            'user' => User::find($id),
            'role' => User::find($id)->roles->first()->name
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // get user
        $user = User::find($id);

        // get role
        $role = Role::findByName($request->role);

        // remove all roles
        $user->removeRole($user->roles->first()->name);

        // assign role
        $user->assignRole($request->role);

        // update user
        $user->update($request->all());

        // return view flash success message
        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // get user
        $user = User::find($id);
        // remove all roles
        $user->removeRole($user->roles->first()->name);
        // delete user
        $user->delete();
        // return view flash success message
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
