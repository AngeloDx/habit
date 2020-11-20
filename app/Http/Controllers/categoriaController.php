<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('categorias.create');
    }
    public function __construct()
    {
        $this->middleware('auth')->only('create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data= request()->validate([
        'nome'=>'required|min:4',
        'capa_cate'=>'required',
        'descricao'=>'required|min:4',]);

      $categoria= new  \App\Categoria;
      $categoria->capa_cate= request('capa_cate');
      $categoria->nome= request('nome');
      $categoria->descricao= request('descricao');
      $categoria->save();
      // Get filename with extension
        $catenameWithExt = $request->file('capa_cate')->getClientOriginalName();

        // Get just the filename
        $catename = pathinfo($catenameWithExt, PATHINFO_FILENAME);

        // Get extension
        $catextension = $request->file('capa_cate')->getClientOriginalExtension();

        // Create new filename
        $catenameToStore = $catename.'_'.time().'.'.$catextension;

        // Uplaod image
        $path= $request->file('capa_cate')->storeAs('public/fotos_cate', $catenameToStore);
        return redirect('/')->with('success','categoria criada');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data= Categoria::findOrFail(id);
      $data->delete();

     return redirect('/dashboard')->with('error', 'Categoria eliminada com successo ');
    }
}
