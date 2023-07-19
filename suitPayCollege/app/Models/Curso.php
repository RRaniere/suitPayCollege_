<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $primaryKey = 'curso_id';


    protected $fillable = [
        'nome',
        'descricao',
        'qtMaxMatriculas',
        'data_inscricao',
        'data_inicio',
        'data_termino',
        'lixeira',
    ];

    protected $casts = [
        'lixeira' => 'boolean',
    ];
}
