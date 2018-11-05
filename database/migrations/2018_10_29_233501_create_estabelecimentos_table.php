<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estabelecimento', function (Blueprint $table) {
            $table->increments('Id_estabelecimento')->nullable();
            $table->string('Nr_cnpj', 14)->nullable();
            $table->string('Nm_estabelecimento', 100)->nullable();
            $table->string('Endereco', 250)->nullable();
            $table->integer('Nr_estabelecimento')->default(0);
            $table->string('Complemento',200)->nullable();
            $table->string('Bairro',200)->nullable();
            $table->string('Cep',8);
            $table->integer('Id_cidade');
            $table->integer('Nr_dddtelefone');
            $table->integer('Nr_telefone');
            $table->integer('Nr_dddcelular')->default(0);
            $table->integer('Nr_celular')->default(0);
            $table->string('Email', 100)->nullable();
            $table->timestamp('Dt_cadastro')->nullable();
            $table->enum('Ativo',['S','N'])->default('S');
            $table->timestamp('Dt_bloqueio')->nullable();
            $table->string('Observacao', 1000)->nullable();
            $table->timestamp('HorarioInicial')->nullable();
            $table->timestamp('HorarioFinal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Estabelecimento');
    }
}
