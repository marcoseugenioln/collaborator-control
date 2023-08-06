@extends('layouts.master')

@section('content')

<div class="menu_div">
    <a href="{Route::view('/unidades');}">Unidades</a>

    <a href="{Route::view('/colaboradores');}">Colaboradores</a>

    <a href="{Route::view('/desempenho');}">Desempenho</a>
    
</div>

@endsection
