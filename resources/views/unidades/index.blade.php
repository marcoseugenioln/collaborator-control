@extends('layouts.master')

@section('content')

<ul>
    @foreach($unidades as $unidade)
        <li><a href="/unidades/{{ $unidade->id }}">{{ $unidade->razao_social }}</a></li>
    @endforeach
</ul>

@endsection