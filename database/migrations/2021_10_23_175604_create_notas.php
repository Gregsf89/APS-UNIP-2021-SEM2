<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('aluno_id', false, true);
            $table->bigInteger('avaliacao_id', false, true);

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('avaliacao_id')->references('id')->on('avaliacoes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
