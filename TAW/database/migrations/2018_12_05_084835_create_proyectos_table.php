<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('presupuesto')->default(0);
            $table->datetime('tiempoEstimado')->nullable();
            $table->string('requisitos')->nullable();
            $table->integer('user_id');
            $table->integer('encargado')->nullable();
            $table->string('localidad')->nullable();
            $table->string('categoria')->default('TAW');
            $table->string('estado')->default('En espera');
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
        Schema::dropIfExists('proyectos');
    }
}
