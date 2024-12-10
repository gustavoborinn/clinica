<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicoEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico__especialidades', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_medico')->nullable();
            $table->integer('id_especialidade')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medico__especialidades');
    }
}
