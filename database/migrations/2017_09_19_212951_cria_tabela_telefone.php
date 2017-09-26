<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaTelefone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
           $table->increments('id');
            $table->string('ddd');
            $table->string('telefone');
            $table->integer('pessoa_id')->unsigned();//use integer não int
            //uso esse metodo unsigned para não dar conflito com o tamanho do int auto increment
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            //crio uma chave estrangeira de pessoa_id dessa tabela para o id da tabela pessoas, e se usar o metodo Delete em id pessoas aqui por causa do delete cascade tbm será deletado 
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
        Schema::dropIfExists('telefones');
    }
}
