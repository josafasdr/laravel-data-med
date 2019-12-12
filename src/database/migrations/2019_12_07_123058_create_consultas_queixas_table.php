<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasQueixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtm_consultas_queixas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('consulta_id');
            $table->unsignedBigInteger('queixa_id');
            //$table->timestamps();

            $table->foreign('consulta_id')
                  ->references('id')
                  ->on('dtm_consultas')
                  ->onDelete('cascade');
            $table->foreign('queixa_id')
                  ->references('id')
                  ->on('dtm_queixas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtm_consultas_queixas');
    }
}
