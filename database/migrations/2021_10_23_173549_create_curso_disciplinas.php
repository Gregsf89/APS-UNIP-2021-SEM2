<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('curso_id', false, true);
            $table->bigInteger('disciplina_id', false, true);

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('curso_disciplinas');
    }
}
