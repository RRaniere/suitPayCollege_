<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;


    protected $table = 'matriculas';

    protected $primaryKey = 'matricula_id';


    protected $fillable = [
        'aluno_id',
        'curso_id',
        'data_matricula',
        'data_nascimento',
        'status',
        'lixeira',
    ];

    protected $casts = [
        'lixeira' => 'boolean',
    ];
}
