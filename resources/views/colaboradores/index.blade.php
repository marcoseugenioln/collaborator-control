@extends('layouts.master')

@section('content')
<a  href="/colaboradores/create">Registrar Colaborador</a><hr>

<h3>Relatório de Colaboradores</h3>
<ul>
    @foreach($colaborador as $unidade)
        <li><a href="/colaboradores/{{ $colaborador->id }}">{{ $colaborador->nome }}</a></li>
    @endforeach
</ul>

@endsection