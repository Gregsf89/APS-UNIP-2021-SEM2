<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('turma_id', false, true);
            $table->bigInteger('disciplina_id', false, true);

            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_disciplinas');
    }
}
