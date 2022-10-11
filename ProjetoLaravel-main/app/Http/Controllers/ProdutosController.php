<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller
{
    public function index(){
        $produtos =  Produto::All();
        return view('produtos.index', ['produtos'=>$produtos]);
     }

     public function create(){
        return view('produtos.create');
     }

     public function store(ProdutoRequest $request){
        $novo_produto =  $request->all();
        Produto::create($novo_produto);

        return redirect('produtos');
     }

}
