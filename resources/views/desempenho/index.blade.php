@extends('layouts.master')

@php
use App\Models\Colaborador;
use App\Models\Cargo;
use App\Models\Unidade;

$colaboradores = new Colaborador;
$unidades = new Unidade;
$cargos = new Cargo;

@endphp

@section('content')
<a  href="/desempenho/create">Registrar Desempenho</a><hr>

<h3>Ranking de Desempenho</h3>
<ol>
    @foreach($desempenhos as $desempenho)
        <li>
            Nome: {{$colaboradores->where('id', $desempenho->colaborador_id)->first()->nome}}
            CPF: {{$colaboradores->where('id', $desempenho->colaborador_id)->first()->cpf}}
            Email: {{$colaboradores->where('id', $desempenho->colaborador_id)->first()->email}}
            Cargo: {{$cargos->where('id', $desempenho->cargo_id)->first()->cargo}}
            Unidade: {{$unidades->where('id', $colaboradores->where('id', $desempenho->colaborador_id)->first()->unidade_id)->first()->nome_fantasia}}
            Nota: {{$desempenho->nota_desempenho}}
        </li>
    @endforeach
</ol>

@endsection