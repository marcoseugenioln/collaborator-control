<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'Colaboradores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['unidade_id', 'nome', 'cpf', 'email'];
}

