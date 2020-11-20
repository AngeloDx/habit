<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residencial;

class residencialController extends Controller
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
      return view('residencial.create');
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
                    'nome'    =>  'required',
                    'icon'         =>  'image|max:2048'
            ]);

            $icon = $request->file('icon');

            $new_name = rand() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('resicones'), $new_name);
            $input_data = array(
                'nome'       =>   $request->nome,
                'icon'            =>   $new_name
            );

            Residencial::create($input_data);

            return redirect('/')->with('Success', 'criado com successo');
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
      $data = Residencial::findOrFail($id);
      return view('edit', compact('data'));
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
      $request->validate([
              'icon'    =>  'required',
              'nome'     =>  'required',

          ]);


      $input_data = array(
          'nome'       =>   $request->nome,
          'icon'        =>   $image_name,

      );

      Residencial::whereId($id)->update($input_data);

      return redirect('/dashboard')->with('Success', 'Actualizado com successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Propriedade::findOrFail($id);
    $data->delete();

    return redirect('/dashboard')->with('error', 'Propriedade eliminada com successo ');
    }
}
