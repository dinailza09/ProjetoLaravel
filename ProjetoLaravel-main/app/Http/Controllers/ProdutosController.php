<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutosRequest;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(){
        $produtos =  Produto::All();
        return view('produtos.index', ['produtos'=>$produtos]);
     }

     public function create(){
        return view('produtos.create');
     }

        public function store(ProdutosRequest $request){
        $produtos =  $request->all();
        Produto::create($produtos);

        return redirect()->route('produtos');
     }

      public function update(ProdutosRequest $request, $id){
      Produto::find($id)->update($request->all());
      return redirect()->route('produtos');   }


     public function destroy($id){
     Produto::find($id)->delete();
     return redirect()->route('produtos');   }

     
      public function edit($id){  
      $produtos = Produto::find($id);
      return view('produtos.edit', compact ('produtos'));   }
}
