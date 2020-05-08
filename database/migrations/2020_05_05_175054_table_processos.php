<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->id('id');
            $table->string("numero",20);
            $table->string("descricao",255);
            $table->string("status",50);
            $table->unsignedBigInteger('id_cliente');	
            $table->unsignedBigInteger('id_contraria');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');	
            $table->foreign('id_contraria')->references('id')->on('contraria');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processos');
    }
}
