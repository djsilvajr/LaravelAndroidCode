<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        //dd($produtos->all());
        $array_produtos = array('produtos'=>$produtos);
        return view('home', $array_produtos);
        
    }


    public function novo(){
        return view('novo');
    }


    public function editar($id){
        $produtos = Produto::find($id);
        return view('editar', $produtos);
    }



    public function update(Request $request){
         //dd($request->all());
        $produtos = Produto::find($request->id);
        $produtos->nome = $request->nome_form;
        $produtos->produtor = $request->produtor_form;
        $produtos->plataforma = $request->plataforma_form;
        $produtos->quantidade = $request->quantidade_form;
        $produtos->save();
        return back();
    }



    public function excluir($id){
        $produtos = Produto::find($id);
        $produtos->delete();
        return redirect('/');

    }



    public function adicionar(Request $request){
        //dd($request->all());
        $produtos = new Produto;
        $produtos->nome = $request->nome_form;
        $produtos->produtor = $request->produtor_form;
        $produtos->plataforma = $request->plataforma_form;
        $produtos->quantidade = $request->quantidade_form;
        $produtos->save();
        return back();
    }

}
