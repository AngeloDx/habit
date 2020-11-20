<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Propriedade;
Use App\Categoria;
Use App\Comercial;
Use App\Residencial;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function __construct(){
     $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // if(Gate::denies('gerir_usuarios'))
      // {
      //   return redirect(route('admin.user.edit'));
      // }
       $user =  User:: all();
      $userCount = User::count();
       $propriedade= Propriedade ::all();
       $propriedadeCount= Propriedade ::count();
       $categoria = Categoria ::all();
       $categoriaCount= Categoria ::count();
       $residencial=Residencial ::all();
       $comercial=Comercial::all();
      return View('adminpainel',compact('user','propriedade','categoria','comercial','residencial','userCount','propriedadeCount','categoriaCount'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      // if(Gate::denies('editar_usuarios'))
      // {
      //   return redirect(route('admin.user.index'));
      // }

      $role=Role::all();
      return view('admin_edit')->with(['user'=>$user, 'role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $role=Role::all();
        $user->roles()->sync($request->role);
        return redirect(route('admin.user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      if(Gate::denies('eliminar_usuarios'))
      {
        return redirect(route('admin.user.index'));
      }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
