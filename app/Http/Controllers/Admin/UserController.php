<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            /*'role' => $request->get('role'),*/
            'password' => $request->get('password'),
        ]);

        $user->save();

        $selectedRoles = $request->input('role', []);
        $user->roles()->attach($selectedRoles);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([

            'name'=>'required',
            'email'=> 'required',
        ]);

        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->update();

        $user->roles()->sync($request->input('roles', []));


        /* return redirect()->route('admin.users.index')->with('success', 'Utilisateur Modifié avec succès');*/
        return redirect('/dashboard/users')->with('success', 'Utilisateurs Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)


    {
        $user->roles()->detach();
        $user->delete();

        return redirect('/dashboard')->with('success', 'Utilisateur a été supprimer avec succès');
    }
}
