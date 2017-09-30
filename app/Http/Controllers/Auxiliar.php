<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Pais;
use App\Estado;
use App\Cidade;
use App\Endereco;

class Auxiliar {

    public function registraEndereco($dados) {
        
        if (Pais::where('nome', $dados['pais'])->count() == 0) {

            DB::table('pais')->insert([
                
                'nome' => $dados['pais']
                    
            ]);
        }

        $id_pais['id'] = DB::table('pais')->select('id')->where('nome', $dados['pais'])->get();

        if (Estado::where('nome', $dados['estado'])->count() == 0) {

            DB::table('estados')->insert([
                
                'nome' => $dados['estado'],
                'pais_id' => $id_pais['id'][0]->id  
                    
            ]);
        }

        $id_estado['id'] = DB::table('estados')->select('id')->where('nome', $dados['estado'])->get();

        if (Cidade::where('nome', $dados['cidade'])->count() == 0) {

            DB::table('cidades')->insert([
                
                'nome' => $dados['cidade'],
                'estado_id' => $id_estado['id'][0]->id
                    
            ]);
        }
        $id_cidade['id'] = DB::table('cidades')->select('id')->where('nome', $dados['cidade'])->get();

        if (Endereco::where('cep', $dados['cep'])
                        ->where('numero', $dados['num'])->count() == 0) {

            DB::table('enderecos')->insert([
                
                'cep' => $dados['cep'],
                'logradouro' => $dados['endereco'],
                'bairro' => $dados['bairro'],
                'numero' => $dados['num'],
                'cidade_id' => $id_cidade['id'][0]->id
                    
            ]);
        }
        $id_endereco['id'] = DB::table('enderecos')->select('id')->where('cep', $dados['cep'])->where('numero', $dados['num'])->get();

        return $id_endereco['id'][0]->id;
    }
    
    public function 

}
