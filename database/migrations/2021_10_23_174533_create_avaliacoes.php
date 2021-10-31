<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->decimal('np1')->nullable();
            $table->decimal('np2')->nullable();
            $table->decimal('exame')->nullable();
            $table->tinyInteger('faltas', false, false)->default(0);
            $table->bigInteger('disciplina_id', false, true);
            $table->bigInteger('turma_id', false, true);

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
        Schema::dropIfExists('avaliacoes');
    }
}
