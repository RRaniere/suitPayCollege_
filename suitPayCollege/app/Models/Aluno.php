<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $primaryKey = 'aluno_id';


    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'lixeira',
    ];

    protected $casts = [
        'lixeira' => 'boolean',
    ];
}
