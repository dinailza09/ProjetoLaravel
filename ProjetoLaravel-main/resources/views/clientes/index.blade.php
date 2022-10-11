{{-- resources/view/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h1>Clientes</h1>
@stop

@section('content')
<p>Listagem dos Clientes</p>
<table class="table table-striped table-bordered table-hover">
<thead>
    <th>Nome</th>
    <th>CPF</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Endereço</th>
</thead>
<tbody>
@foreach ($clientes as $cliente)
<tr>
<td>{{$cliente->nome }}</td>
<td>{{$cliente->cpf }}</td>
<td>{{$cliente->email }}</td>
<td>{{$cliente->telefone }}</td>
<td>{{$cliente->endereco }}</td>
</tr>
@endforeach
</tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_customm.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
