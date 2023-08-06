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
        $names = array(
            'Marcos Nascimento', 'Nicole Nascimento', 'Marcos Antonio', 'Marco Eugenio', 'Edemara Nascimento', 'Gabriela Landim', 'Gabriela Nascimento', 'Maheus Araujo', 'Matheus Santiago', 'Josué Oliveira',
            'Adinilson Moreira', 'Maria Eduarda', 'Maria Isabel', 'Edgar Ramires', 'Lucas Silva', 'Ana Luiza', 'Cesar Augusto', 'Ana Paula', 'Maria Luiza', 'Maria Antonia',
            'Lucas Neto', 'Felipe Neto', 'Felipe Castanhari', 'Joana Darc', 'Lucas Guimarães', 'Walter Melo', 'Wesley Magalhães', 'Renato Russo', 'Jessica Pereira', 'Jessica Pires',
            'Danilo Pereira', 'Bruno Pereira', 
        );

        Schema::create('Colaboradores', function (Blueprint $table) 
        {
            $table->increments('id')->primary();
            $table->foreign('unidade_id')->references('id')->on('Unidades');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Colaboradores');
    }
};
