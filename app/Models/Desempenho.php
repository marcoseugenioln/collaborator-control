<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'Cargo_Colaborador';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cargo_id', 'colaborador_id', 'nota_desempenho'];
}

