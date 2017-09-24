<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroClienteController extends Controller {
    
    public function cadastrar(Request $request){
        $aux = new Auxiliar();
        $dados = $request->all();
        $aux->registraEndereco($dados);
        
        
        
        
    }
}
