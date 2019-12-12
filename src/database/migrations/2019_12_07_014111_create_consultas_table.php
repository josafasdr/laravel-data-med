<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtm_consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('plano_conduta');
            $table->unsignedBigInteger('paciente_id');
            $table->timestamps();

            $table->foreign('paciente_id')
                  ->references('id')
                  ->on('dtm_pacientes')
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
        Schema::dropIfExists('dtm_consultas');
    }
}
