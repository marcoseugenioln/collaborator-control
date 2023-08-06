<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Cargo_Colaborador', function (Blueprint $table) 
        {
            $table->increments('id')->primary();
            $table->foreign('cargo_id')->references('id')->on('Cargos');
            $table->foreign('colaborador_id')->references('id')->on('Colaboradores');
            $table->integer('nota_desempenho');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cargo_Colaborador');
    }
};
