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
    protected $table = 'Unidades';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome_fantasia', 'razao_social', 'cnpj'];
}

