@extends('adminlte::page')

@section('content')
<h3>Novo Cliente</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
{!! Form::open(['url'=>'clientes/store']) !!}
        <div class="form-group">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required|min:5']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('cpf', 'CPF') !!}
        {!! Form::text('cpf', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::text('email', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('telefone', 'Telefone') !!}
        {!! Form::text('telefone', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('endereco', 'Endereço') !!}
        {!! Form::text('endereco', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Criar Cliente', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        {!! Form::button('Voltar', ['class' => 'btn btn-default', 'onclick' => 'window.history.back()']) !!}
    </div>

{!! Form::close() !!}
@stop
