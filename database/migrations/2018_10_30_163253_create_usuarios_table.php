<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('Id_usuario');
            $table->unsignedInteger('Id_grupodeusuario');
            $table->string('Nr_cpf', 11);
            $table->string('Nm_usuario',100);
            $table->enum('Sexo', ['M','F']);
            $table->string('Email',100);
            $table->string('Senha', 50);
            $table->string('ConfirmaSenha',50);
            $table->unsignedInteger('Id_cidade');
            $table->timestamps('Dt_cadastro');
            $table->enum('Ativo',['S','N']);
            $table->timestaps('Dt_bloqueio');
            $table->string('Observacao',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
