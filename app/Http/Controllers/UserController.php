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
        // Get users with role of user

            $users = User::role('user')->get();
            foreach($users as $user){
                if($user->expire_date < $user->payement_date){
                    $user->status = 'unpayed';
                    $user->save();
                }
            }

        // Get all roles
            $roles = Role::all();

        // get number of users
            $usersCount = User::count();

            // get all user that have role of coach
            $coaches = User::role('coach')->get();
            // dd($coaches);



        // Return view
            return view('users.user', compact('users', 'roles', 'usersCount' ,'coaches'));
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
        if($request->role=='user'){
            // add coach_id to request
            $request['coach_id'] = $request->coach;
        }
        //store a new user
        $user = User::create($request->all());

        // assign role  to user
        $user->assignRole($request->role);

        // hash password
        $user->password = bcrypt($request->password);


        // upload image
        $image=$request->file('image');
        if($image){
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/users'), $new_name);
            $user->image = $new_name;
        }

        // save user
        $user->save();

        // check user role and redirect to view
        if ($request->role == 'user') {
            return redirect()->route('users.index')->with('success', 'User created successfully');
        } else if ($request->role == 'coach') {
            return redirect()->route('coaches.index')->with('success', 'Coach created successfully');
        }elseif ($request->role == 'admin') {
            return redirect()->route('admins.index')->with('success', 'admin created successfully');
        }

        // return view flash success message
        return redirect()->back()->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    return response()->json([
    'user' => User::find($id),
    'role' => User::find($id)->roles->first()->name
]);

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

        // update user image
       $image=$request->file('image');
        // remove all roles
        $user->removeRole($user->roles->first()->name);

        // assign role
        $user->assignRole($request->role);

        // if password is not empty update password
        if ($request->password != null) {
            $request["password"] = bcrypt($request->password);
        }else{
            $request["password"] = $user->password;
        }
        if($request->role=='user'){
            // add coach_id to user
            $request['coach_id'] = $request->coach;
        }
        // dd($request->all());

        // dd($request->all());
        //update user
        $user->update($request->all());


        $image=$request->file('image');
        if($image){
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/users'), $new_name);
            $user->image = $new_name;
            $user->save();
        }

        // return view flash success message
        return redirect()->back()->with('warning', 'User updated successfully');
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
        return redirect()->back()->with('danger', 'User deleted successfully');
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $users = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('users.user', compact('users'));
    }




    public function switchStatus(string $id)
    {
        // get user
        $user = User::find($id);

        $status=$user->status;

        if($status=='payed'){
            $user->status='unpayed';
        }elseif($status=='unpayed'){
            $user->payement_date=date('Y-m-d');
            $user->expire_date=date('Y-m-d', strtotime('+1 month'));
            $user->status='payed';
        }

        // update user
        $user->save();

        // return view flash success message
        return redirect()->back()->with('success', 'User status updated successfully');
    }

    public function admins(){

        // return users with role of admin
        $admins = User::role('admin')->get();


        // return roles
        $roles = Role::all();

        // return coaches
        $coaches = User::role('coach')->get();


        // return view
        return view('users.admins', compact('admins', 'roles', 'coaches'));

    }

    public function coaches(){

        // return users with role of coach
        $coaches = User::role('coach')->get();

        // return roles
        $roles = Role::all();

        // return view
        return view('users.coaches', compact('coaches', 'roles'));

    }


}
