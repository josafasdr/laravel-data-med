<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtm_pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->enum('sexo', ['Feminino', 'Masculino']);
            $table->date('nascimento');
            $table->integer('prontuario');
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
        Schema::dropIfExists('dtm_pacientes');
    }
}
