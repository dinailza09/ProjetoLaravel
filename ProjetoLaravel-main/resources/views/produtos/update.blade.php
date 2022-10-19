@extends('adminlte::page')

@section('content')
<h3>Alterar Produto</h3>

{!! Form::open(['url'=>'produtos/store']) !!}
        <div class="form-group">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required|min:5']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('descricao', 'Descrição') !!}
        {!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade') !!}
        {!! Form::text('quantidade', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('valor', 'Preço') !!}
        {!! Form::text('valor', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>     
        {!! Form::close() !!}
@stop
    
<form method="POST" action="/updateproduto" >
  @csrf     
  @method('PUT')   
  
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Atualizar</button>
  </form>        

   

