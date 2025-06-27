<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cargo',
        'telefone',
        'endereco',
        'provincia',
        'municipio',
        'numero',
    ];

    protected $table = "colaboradores";

}
