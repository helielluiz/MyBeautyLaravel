<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cidade', function (Blueprint $table) {
            $table->increments('Id_cidade');
            $table->string('Nr_ibge',7);
            $table->string('Nm_cidade',100);
            $table->unsignedInteger('Id_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cidade');
    }
}
