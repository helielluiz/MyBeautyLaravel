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
            $table->increments('Id_estabelecimento');
            $table->string('Nr_cnpj', 14);
            $table->string('Nm_estabelecimento', 100);
            $table->string('Endereco', 250);
            $table->integer('Nr_estabelecimento')->default(0);
            $table->string('Complemento',200);
            $table->string('Bairro',200);
            $table->string('Cep',8)->nullable(false);
            $table->integer('Id_cidade')->nullable(false);
            $table->integer('Nr_dddtelefone')->nullable(false);
            $table->integer('Nr_telefone')->nullable(false);
            $table->integer('Nr_dddcelular')->default(0);
            $table->integer('Nr_celular')->default(0);
            $table->string('Email', 100);
            $table->timestamps('Dt_cadastro');
            $table->enum('Ativo',['S','N'])->default('S');
            $table->timestamps('Dt_bloqueio');
            $tabel->string('Observacao', 1000);
            $table->timestamps('HorarioInicial');
            $table->timestamps('HorarioFinal');
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
