@extends('layouts.master')

@section('content')

<div class="registra_desempenho_div">

    <form method="post" action="/desempenho" enctype="multipart/form-data">

        <label>CPF do Colaborador</label><input name="cpf" type="text"><hr>

        <label>Nota de Desempenho</label><input name="nota_desempenho" type="text"><hr>
        <select name="nota_desempenho" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <label>Cargo</label>
        <select name="cargo_id" class="form-control">
            @foreach($cargos as $cargo)
                <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
            @endforeach
        </select>

        <button type="submit">Registrar</button>
    </form>
    
</div>

@endsection