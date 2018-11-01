<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtendentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Atendentes', function (Blueprint $table) {
            $table->increments('Id_atendente');
            $table->unsignedInteger('Id_estabelecimento');
            $table->string('Nm_atendente', 100);
            $table->string('Observacao', 1000);
            $table->enum('Ativo',['S','N'])->default('S');
            $table->timestamp('Dt_bloqueio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Atendentes');
    }
}
