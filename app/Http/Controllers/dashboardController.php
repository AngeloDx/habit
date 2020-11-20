<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $propriedade= \App\Propriedade:: all();

         $use_id= auth()->user()->id;
         $user =  User:: find($use_id);

        return View('dashboard')->with('propriedade',$user->propriedade);
    }
}
