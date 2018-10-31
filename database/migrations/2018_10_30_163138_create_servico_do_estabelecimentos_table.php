<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoDoEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ServicoDoEstabelecimento', function (Blueprint $table) {
            $table->unsignedInteger('Id_servico');
            $table->unsignedInteger('Id_servico');
            $table->decimal('Valor',18,2);
            $table->decimal('Valor_desconto',18,2);
            $table->enum('ApenasLocal', ['S','N'])->default('S');
            $table->string('Observacao', 1000);
            $table->enum('Ativo', ['S','N'])->default('S');
            $table->timestamps('Dt_bloqueio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servico_do_estabelecimentos');
    }
}
