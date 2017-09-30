<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fornecedor;

class FornecedoresController extends Controller {
    
    public function pagFornecedores(){
        
        $fornecedor = \App\Fornecedor::paginate(5);
        return view('layout_admin.list_fornecedores', compact('fornecedor'));
    }

    public function cadastrar(Request $request) {
        $aux = new Auxiliar();
        $dados = $request->all();
        $id_endereco = $aux->registraEndereco($dados);

        $id_fornecedor = DB::table('fornecedores')->insertGetId([
            
            'cnpj' => $dados['cnpj'],
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'telefone' => $dados['fone']
         
        ]); 
        
        DB::table('endereco_fornecedor')->insert([
            
           'endereco_id' => $id_endereco,
           'fornecedor_id' => $id_fornecedor            
        ]);
        
        return redirect()->route('admin.fornecedor');
        
    }

    public function formCad() {
        $acao = 1;
        return view('layout_admin.form_fornecedores', compact('acao'));
    }
    
    public function formEdit($id){
        $fornecedor = \App\Fornecedor::find($id);
        
        $acao = 2;
        return view('layout_admin.form_fornecedores', compact('fornecedor', 'acao'));
    }
    
    public function atualizar(Request $request){
        $dados = $request->all();
        
        Fornecedor::update($dados);
    }

}
