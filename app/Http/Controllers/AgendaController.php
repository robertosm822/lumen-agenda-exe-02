<?php

/* 
 * Lumen Mini - Framework by Laravel - 03-11-2015
 */
namespace CodeAgenda\Http\Controllers;

use \CodeAgenda\Entities\Pessoa;
use \CodeAgenda\Entities\Telefone;
//use Laravel\Lumen\Routing\Controller as BaseController;

class AgendaController extends Controller
{
    public function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view( 'agenda', compact('pessoas'));
    }
    
    public function apagarTelefone($id){
        $telefone = Telefone::where('id', '=', $id)->firstOrFail();
        if($telefone){
            $telefone::destroy($id);
            echo "1";
        } else {
            echo "0";
        }
        exit();
    }


    public function apagar($id){
      
         $pessoa = Pessoa::where('id', '=', $id)->firstOrFail();
         return view('partials.apagar', compact('pessoa') );
    }
    
    public function destroy($id){
        $pessoa = Pessoa::where('id', '=', $id)->firstOrFail();
        $pessoa::destroy($id);
        echo 'Destruindo... <script> window.location.href="http://'.$_SERVER['HTTP_HOST'].'"</script>'; 
        exit();
    }
   
}