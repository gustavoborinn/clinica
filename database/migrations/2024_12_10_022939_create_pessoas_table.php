<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nome')->nullable();
            $table->string('Rua')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Complemento')->nullable();
            $table->integer('id_uf')->nullable();
            $table->string('CEP')->nullable();
            $table->string('CPF')->nullable();
            $table->string('RG')->nullable();
            $table->string('Email')->nullable();
            $table->date('DataNascimento')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pessoas');
    }
}
