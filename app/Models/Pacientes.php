<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'sexo',
        'endereco',
        'telefone',
        'email',
    ];
}
