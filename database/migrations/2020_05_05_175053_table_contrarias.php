<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableContrarias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #id,nome,datanascimento,rg,cpf,timestamps,tipo_cliente
        Schema::create('contraria', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('rg');
            $table->string('cpf')->unique();
            $table->string('cep');
            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('numero');
            $table->softDeletes();
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
        Schema::dropIfExists('contraria');
    }
}
