{{-- resources/view/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
<h1>Produtos</h1>
@stop

@section('content')
<p>Listagem de produtos</p>
<table class="table table-striped table-bordered table-hover">
<thead>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    <th>Valor</th>
</thead>
<tbody>
@foreach ($produtos as $produto)
<tr>
<td>{{$produto->nome }}</td>
<td>{{$produto->descricao }}</td>
<td>{{$produto->quantidade }}</td>
<td>{{$produto->valor }}</td>
<td>
    <a href="{{ route('produtos.edit', ['id'=>$produto->id])}}" class="btn-sm btn-success">Editar</a>
    <a href="{{route('produtos.destroy', ['id'=>$produto->id])}}" onclick="return ConfirmaExclusao({{ $produto->id }})" class="btn-sm btn-danger">Remover</a>
</tr>

@endforeach
</tbody>
</table><a href="{{ route('produtos.create', []) }}" class="btn btn-info">Adicionar</a>    
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_customm.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
