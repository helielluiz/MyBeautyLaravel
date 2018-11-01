<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentoDoServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AgendaDeServico', function (Blueprint $table) {
            $table->unsignedInteger('Id_atendente');
            $table->unsignedInteger('Id_servico');
            $table->unsignedInteger('Id_estabelecimento');
            $table->timestamp('Dt_agendamento');
            $table->string('Status', 9);
            $table->date('Dt_execucao');
            $table->string('UsuarioDeExecucao', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AgendaDeServico');
    }
}
