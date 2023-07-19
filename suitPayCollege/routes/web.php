<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController; // Importe o namespace correto


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

//Aluno

Route::get('/alunos/lista', 'AlunoController@index')->name('alunos.lista');
Route::get('/alunos/novo', 'AlunoController@create');
Route::post('/alunos/novo', 'AlunoController@store');
Route::get('/alunos/editar/{id}', 'AlunoController@edit');
Route::post('/alunos/editar/{id}', 'AlunoController@update');
Route::get('/alunos/apagar/{id}', 'AlunoController@destroy');

Route::get('/alunos/alunos-ativos', 'AlunoController@alunosAtivos');


//Curso

Route::get('/cursos/lista', 'CursoController@index')->name('cursos.lista');
Route::get('/cursos/novo', 'CursoController@create');
Route::post('/cursos/novo', 'CursoController@store');
Route::get('/cursos/editar/{id}', 'CursoController@edit');
Route::post('/cursos/editar/{id}', 'CursoController@update');
Route::get('/cursos/apagar/{id}', 'CursoController@destroy');

Route::get('/cursos/cursos-ativos', 'CursoController@cursosAtivos');


//Matriculas

Route::get('/matriculas/lista', 'MatriculaController@index')->name('matriculas.lista');
Route::get('/matriculas/nova', 'MatriculaController@create');
Route::post('/matriculas/nova', 'MatriculaController@store');







