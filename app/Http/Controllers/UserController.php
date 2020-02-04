<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Category;
use App\Product;
use App\Cart;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 /*   public function index()
    {
      $users = User::all();    

      return view('admin.users.index',[
          'title' => 'Listado de Usuarios',
          'users' => $users,
        ]);
        //return view('admin.user.index',['usuarios' => User::all()]);
    }
*/
    public function index()
    {
           $users = User::all();    

      return view('admin.users.index',[
                
          'title' => 'Listado de usuarios',
          'users' => $users
        ]);
      //redirect (profile)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.users.create',[
          'user' => new User
      ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::find($id);
      return view('admin.users.show', [
        'user' => $user,
      ]);
      //  return view('website.user.show', ['user' => User::findOrFail($user)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('admin.users.edit',[
          'user' => User::findOrFail($id)
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate ($request,
      [
      'role' => 'required',
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'avatar_id' =>'required',
      ]);
      $user = User::find($id);
      $user->update($request->all());
      return redirect('admin/users/' . $user->id);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);

      $user->delete();

      return redirect('admin/users');
    }
}
