<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableClientesProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()	
    {	
        Schema::create('cliente_processo', function (Blueprint $table) {	
            $table->id('id');	
            $table->unsignedBigInteger('id_cliente');	
            $table->unsignedBigInteger('id_processo');	
            $table->timestamps();	

            $table->foreign('id_cliente')->references('id')->on('clientes');	
            $table->foreign('id_processo')->references('id')->on('processos');	
        });	
    }	

    /**	
     * Reverse the migrations.	
     *	
     * @return void	
     */	
    public function down()	
    {	
        Schema::dropIfExists('cliente_processo');	
    }
}
