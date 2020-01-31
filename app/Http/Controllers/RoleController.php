<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.role.index',[
          'title' => 'Listado de Roles',
          'role' => $role,
        ]);

      //  return view('admin.role.index',['roles' => Role::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.role.create',[
          'role' => new Role
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate ($request,
      [
      'name' => 'required',

      ]);

      $role = Role::create($request->all());
      return redirect('/admin/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
      $role = Role::find(id)
      return view('admin.role.show', [
        'role' => $role,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
      return view('admin.role.edit',[
          'role' => Role::findOrFail($id)
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
      $this->validate ($request,
      [
      'name' => 'required',
      ]);

      $role = Role::find($id);
      $role->update($request->all());
      return redirect('/admin/role/' . $role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
      $role = Role::findOrFail($id);

      $role->delete();

      return redirect('/admin/role');
    }
}
