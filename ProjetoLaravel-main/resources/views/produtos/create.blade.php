
@extends('adminlte::page')

@section('content')
<h3>Novo Produto</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
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
        {!! Form::submit('Criar Produto', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        {!! Form::button('Voltar', ['class' => 'btn btn-default', 'onclick' => 'window.history.back()']) !!}
    </div>
{!! Form::close() !!}
@stop
