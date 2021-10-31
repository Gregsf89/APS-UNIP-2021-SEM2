<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_cursos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('aluno_id', false, true);
            $table->bigInteger('curso_id', false, true);

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_cursos');
    }
}
