<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('curso_id');
            $table->string('nome')->unique();
            $table->text('descricao');
            $table->unsignedInteger('qtMaxMatriculas');
            $table->date('prazo_inscricao');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->boolean('lixeira')->default(false);
            $table->timestamps();
        });
        
        Schema::create('alunos', function (Blueprint $table) {
            $table->id('aluno_id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->string('celular');
            $table->date('data_nascimento');
            $table->boolean('lixeira')->default(false);
            $table->timestamps();

        });
        
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('matricula_id');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('curso_id');
            $table->timestamp('data_matricula');
            $table->string('status')->default('ATIVO');
            $table->boolean('lixeira')->default(false);
            $table->timestamps();

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
};
