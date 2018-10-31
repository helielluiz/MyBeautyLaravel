<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoDoAtendentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AtendenteXServico', function (Blueprint $table) {
            $table->unsignedInteger('Id_atendente');
            $table->unsignedInteger('Id_servico');
            $table->unsignedInteger('Id_estabelecimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AtendenteXServico');
    }
}
