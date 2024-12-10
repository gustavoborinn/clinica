<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultaPatologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta__patologias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_consulta')->nullable();
            $table->integer('id_patologia')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consulta__patologias');
    }
}
