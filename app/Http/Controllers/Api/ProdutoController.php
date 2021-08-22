<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Produto;

class ProdutoController extends Controller
{
    public function produtos(){
        return Produto::all();
    }

    public function getCliente($id){
        $produtos = Produto::find($id);

        return $produtos;
    }

    public function adicionar(Request $request){
        try{     
            $produtos = new Produto;
            $produtos->nome = $request->nome_app;
            $produtos->produtor = $request->produtor_app;
            $produtos->plataforma = $request->plataforma_app;
            $produtos->quantidade = $request->quantidade_app;
            $produtos->save();
            return['insert'=>'ok'];

        }catch(\Exception $erro){
            return ['insert'=>'erro'];
        }
    }

    public function atualizar(Request $request, $id){
        try{     
            $produtos = Produto::find($id);
            $produtos->nome = $request->nome_app;
            $produtos->produtor = $request->produtor_app;
            $produtos->plataforma = $request->plataforma_app;
            $produtos->quantidade = $request->quantidade_app;
            $produtos->save();
            return['updade'=>'ok'];

        }catch(\Exception $erro){
            return ['update'=>'erro'];
        }
    }

    public function delete($id){
        try{
            $produtos = Produto::find($id);
            $produtos->delete();
            return['delete'=>'ok'];
        }catch(\Exception $erro){
            return['delete'=>'erro'];
        }
    }
}
