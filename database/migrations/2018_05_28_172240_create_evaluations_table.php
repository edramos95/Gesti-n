<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('client_id')->on('incidents');

            $table->integer('support_id')->unsigned();
            $table->foreign('support_id')->references('support_id')->on('incidents');

            $table->integer('satisfaccion');
            $table->integer('tiempo');
            $table->integer('desarrollo');
            $table->integer('recomendacion');
            $table->integer('trato');
            $table->integer('calificacion');
            $table->string('comentario');

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
        Schema::dropIfExists('evaluations');
    }
}
