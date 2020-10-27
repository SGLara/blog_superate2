<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::withTrashed()->get();

        return view('admin.roles.index', compact(['roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
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
            'role_name' => 'required|max:255',
            'role_slug' => 'required|max:255',
        ]);

        $role = Role::create([
            'name' => $request->role_name,
            'slug' => $request->role_slug,
        ]);

        $request->session()->flash('role_stored', true);
        return redirect()->route('blog.admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact(['role']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->name = $request->role_name;
        $role->slug = $request->role_slug;

        $role->save();

        $request->session()->flash('role_updated', true);
        return redirect()->route('blog.admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $role = Role::destroy($request->role_id);

        $request->session()->flash('role_deleted', true);
        return redirect()->route('blog.admin.roles.index');
    }

    public function restore(Request $request)
    {
        Role::withTrashed()->find($request->role_id)->restore();

        $request->session()->flash('role_restored', true);
        return redirect()->route('blog.admin.roles.index');
    }
}
