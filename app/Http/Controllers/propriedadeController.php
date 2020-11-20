<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propriedade;
use App\User;
use App\Role;
use App\Provincia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class propriedadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return View('index');
    }
    public function fiter(){
      return View('');
    }
    public function categoria()
    {
      return view('categoria');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $provincia=\App\Provincia:: all();
      $cidade=\App\Cidade:: all();
      $distrito=\App\Distrito::all();
      $intencao=\App\Intencao::all();
      $residencial=\App\Residencial::all();
      $comercial=\App\Comercial::all();
      return View('propriedade.create', compact('provincia','cidade','distrito','intencao','comercial','residencial'));
    }




    public function venda()
    {

 $propriedade = Propriedade::whereHas('intencao', function ($query) {
     $query->where('intencao_id','=',1);
 })->paginate(2);

return view('propriedade.venda',compact('propriedade'));


     }
    function filtro(Request $request){
   $provincia=\App\Provincia:: all();

       if($request->ajax()){
          if(!empty($request->filtro_provincia))
          {

                   $propriedade = DB::table(Propriedades)
                    ->where('intencao_id','=',1)
                       ->select('provincia_id')
                       ->where('provincia_id', $request->filtro_provincia)
                       ->get();

          }
          else {
            $propriedade = Propriedade::whereHas('intencao', function ($query) {
                $query->where('intencao_id','=',1);
            })->paginate(2);
          }

       }
       $propriedade = Propriedade::whereHas('intencao', function ($query) {
           $query->where('intencao_id','=',1)
           ->select('provincia_id')
           ->groupBy('provincia_id')
           ->orderBy('provincia_id','ASC')
           ->paginate(2);

       });








       $propriedade = Propriedade::whereHas('intencao', function ($query) {
           $query->where('intencao_id','=',1);
       })->paginate(2);

      return view('propriedade.venda',compact('propriedade','provincia'));

     //  $propriedade = Propriedade::whereHas('intencao', function ($query) {
     //      $query->where('intencao_id','=',1);
     //  })->paginate(2);
     //    }
     //    else{
     //      $data = Propriedade::whereHas('intencao', function ($query) {
     //          $query->where('intencao_id','=',1);
     //      })->paginate(2);
     //    }
     //    $datacount=$data->count();
     //    if($datacount>0)
     //    {
     //      foreach ($data as $key => $data) {
     //        $output.='
     //        <tr>
     //  <td>'.$propriedade->designacao.'</td>
     //  <td>'.$propriedade->designacao.'</td>
     //  <td>'.$propriedade->designacao.'</td>
     //  <td>'.$propriedade->designacao.'</td>
     //  <td>'.$propriedade->designacao.'</td>
     // </tr>
     //        ';






          // $output .= '    <div class="col-xl-4 col-md-6 col-lg-4">
          //         <a href="{{ route('propriedade.show', $propriedade->id) }} " class="prop-entry d-block single_property">
          //
          //
          //           <div class="property_thumb">
          //                   <div class="property_tag">
          //                         {{$propriedade->intencao->nome}}
          //                   </div>
          //                   <figure>
          // <!-- <img src="images/img_2.jpg" class="img-fluid"/> -->
          //
          //                 <!-- <img src="{{ asset('/images/') }}"  class="img-fluid" alt="" title=""> -->
          //                 <img src="{{ URL::to('/') }}../images/fotos/{{ $propriedade->fotos }}" class="img-fluid"  />
          //               </figure>
          //               </div>
          //             <div class="prop-text">
          //                 <div class="inner">
          //                     <span class="price rounded">{{$propriedade->preco}} Mt</span>
          //                     <h3 class="title">{{$propriedade->designacao}}</h3>
          //                     <p class="location">{{$propriedade->provincia->nome}}</p>
          //                 </div>
          //                 <div class="prop-more-info">
          //                     <div class="inner d-flex">
          //                         <div class="col">
          //                             <span>Area:</span>
          //                             <strong>{{$propriedade->area}}m<sup>2</sup></strong>
          //                         </div>
          //                         <div class="col">
          //                             <span>Quartos:</span>
          //                             <strong>{{$propriedade->quarto}}</strong>
          //                         </div>
          //                         <div class="col">
          //                             <span>Baths:</span>
          //                             <strong>{{$propriedade->wc}}</strong>
          //                         </div>
          //                         <div class="col">
          //                             <span>Garagem:</span>
          //                             <strong>1</strong>
          //                         </div>
          //                     </div>
          //                 </div>
          //             </div>
          //
          //         </a>
          //     </div>';
     //    }
     //
     //    }
     //    else {
     //      $output='<div> nao foi enctrado Nenhuma Propriedade</div>';
     //    }
     //    $data = array(
     //  'table_data'  => $output,
     //  'total_data'  => $datacount
     // );
     //
     // echo json_encode($data);
     //  }
    }
    public function arendar()
    {

      // $propriedade = Propriedade::whereHas('intencao', function ($query) {
      //     $query->where('intencao_id','=',2);
      // })->paginate(2);

        function filtro(Request $request){
      if($request->ajax()){
         if(!empty($request->filtro_provincia))
         {

                  $propriedade = DB::table(Propriedades)
                   ->where('intencao_id','=',2)
                      ->select('provincia_id')
                      ->where('provincia_id', $request->filtro_provincia)
                      ->get();

         }
         else {
        $propriedade= DB::table('propriedades')->where('intencao_id','=',2)->get();
         }

      }

}

      $propriedade= DB::table('propriedades')->where('intencao_id','=',2)->get();

       return view('propriedade.arendar',compact('propriedade'));
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
      'provincia_id'=>'required',
      'distrito_id'=>'required',
      'cidade_id'=>'required',
      'intencao_id'=>'required',
      'bairo'=>'required',
      'preco'=>'required',
      'area'=>'required',
      'descricao'=>'required',
      'disponibilidade'=>'required',
      'quarteirao'=>'required',
      'quarto'=>'required',
      'wc'=>'required',
      'fotos' =>  'image|max:2048',
      'capa'=>  'image|max:2048'
       ]);

           $fotos=$request->file('fotos');
           $newfotos=rand() .'.' . $fotos->getClientOriginalExtension();
           $fotos->move(public_path('images\fotos'),$newfotos);


    $capa=$request->file('capa');
    $newcapa=rand() .'.' . $capa->getClientOriginalExtension();
    $capa->move(public_path('images/capa'),$newcapa);



$input_data = array(
'provincia_id'=>    $request->provincia_id,
'distrito_id'=>   $request->distrito_id,
'cidade_id'=>   $request->cidade_id,
'intencao_id'=>   $request->intencao_id,
'designacao'=>   $request->designacao,
'bairo'=>   $request->bairo,
'avenida'=>   $request->avenida,
'rua'=>   $request->rua,
'capa'=>   $request->capa,
'nrcasa'=>   $request->nrcasa,
'quarto'=>   $request->quarto,
'wc'=>   $request->wc,
'consinha'=>   $request->consinha,
'quarteirao'=>   $request->quarteirao,
'andar'=>   $request->andar,
'disponibilidade'=>   $request->disponibilidade,
'construcao'=>   $request->construcao,
'preco'=>  $request->preco,
'area'=>$request->area,
'latitude'=>$request->latitude,
'longitude'=>$request->longitude,
'jardin'=>$request->jardin,
'psicinas'=>$request->psicinas,
'escritorio'=>$request->escritorio,
'garagen'=>$request->garagen,
'cerca_electrica'=>$request->cerca_electrica,
'Seguranca'=>$request->Seguranca,
'gerador'=>$request->gerador,
'descricao'=>$request->descricao,
'fotos'=>$newfotos,
'user_id' => Auth::user()->id,
'capa' =>    $newcapa
);


Propriedade::create($input_data);


      return redirect('/dashboard')->with('Success', 'criado com successo');
      }

    public function __construct()
    {
        $this->middleware('auth')->only('create');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = Propriedade::findOrFail($id);
    return view('propriedade.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $provincia=\App\Provincia:: all();
      $cidade=\App\Cidade:: all();
      $distrito=\App\Distrito::all();
      $intencao=\App\Intencao::all();
      $residencial=\App\Residencial::all();
      $comercial=\App\Comercial::all();

      $data = Propriedade::findOrFail($id);
      return view('propriedade.edit', compact('data','intencao','provincia','cidade','distrito','comercial','residencial'));
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
      'provincia_id'=>'required',
      'distrito_id'=>'required',
      'cidade_id'=>'required',
      'intencao_id'=>'required',
      'bairo'=>'required',
      'preco'=>'required',
      'area'=>'required',
      'descricao'=>'required',
      'disponibilidade'=>'required',
      'quarteirao'=>'required',
      'quarto'=>'required',
      'wc'=>'required',
      'fotos'         =>  'image|max:2048',
      'capa'         =>  'image|max:2048'
       ]);




       $image = $request->file('fotos');
       foreach($fotos as $file )
       {
         $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $data[] = $new_name;
       }







    $capa=$request->file('capa');
    $newcapa=rand() .'.' . $capa->getClientOriginalExtension();
    $capa->move(public_path('images/capa'),$newcapa);

$input_data = array(
'provincia_id'=>    $request->provincia_id,
'distrito_id'=>   $request->distrito_id,
'cidade_id'=>   $request->cidade_id,
'intencao_id'=>   $request->intencao_id,
'designacao'=>   $request->designacao,
'bairo'=>   $request->bairo,
'avenida'=>   $request->avenida,
'rua'=>   $request->rua,
'capa'=>   $request->capa,
'nrcasa'=>   $request->nrcasa,
'quarto'=>   $request->quarto,
'wc'=>   $request->wc,
'consinha'=>   $request->consinha,
'quarteirao'=>   $request->quarteirao,
'andar'=>   $request->andar,
'disponibilidade'=>   $request->disponibilidade,
'construcao'=>   $request->construcao,
'preco'=>  $request->preco,
'area'=>$request->area,
'latitude'=>$request->latitude,
'longitude'=>$request->longitude,
'jardin'=>$request->jardin,
'psicinas'=>$request->psicinas,
'escritorio'=>$request->escritorio,
'garagen'=>$request->garagen,
'cerca_electrica'=>$request->cerca_electrica,
'Seguranca'=>$request->Seguranca,
'gerador'=>$request->gerador,
'descricao'=>$request->descricao,
'fotos'=>$new_name,
'capa' =>    $newcapa
);
      Propriedade::whereId($id)->update($input_data);

  return redirect('/dashboard')->with('Success', 'Propriedade actualizada com successo');
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
