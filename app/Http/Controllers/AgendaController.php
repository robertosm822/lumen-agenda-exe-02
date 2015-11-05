<?php

/* 
 * Lumen Mini - Framework by Laravel - 03-11-2015
 */
namespace CodeAgenda\Http\Controllers;

use \CodeAgenda\Entities\Pessoa;
//use Laravel\Lumen\Routing\Controller as BaseController;

class AgendaController extends Controller
{
    public function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        //lista todas as pessoas e seus relacionamentos
        //$pessoas = Pessoa::all();
        //var_dump($pessoas);
        return view( 'agenda', compact('pessoas'));
    }
   
}