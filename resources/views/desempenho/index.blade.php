@extends('layouts.master')

@section('content')
<a  href="/desempenho/create">Registrar Desempenho</a><hr>

<h3>Ranking de Desempenho</h3>
<ol>
    @foreach($desempenhos as $desempenho)
        <li>
            Nome: {{Colaborador::where('id', $desempenho->colaborador_id)->first()->nome}}
            Cargo: {{Cargo::where('id', $desempenho->cargo_id)->first()->cargo}}
            Unidade: {{Unidade::where('id', Colaborador::where('id', $desempenho->colaborador_id)->first()->unidade_id)->first()->nome_fantasia}}
            Nota: {{$desempenho->nota_desempenho}}
        </li>
    @endforeach
</ol>

@endsection