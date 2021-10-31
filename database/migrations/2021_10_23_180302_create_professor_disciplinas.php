<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('professor_id', false, true);
            $table->bigInteger('disciplina_id', false, true);
            $table->bigInteger('turma_id', false, true);

            $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disciplina_id')->references('id')->on('turma_disciplinas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('turma_id')->references('id')->on('turma_disciplinas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor_disciplinas');
    }
}
