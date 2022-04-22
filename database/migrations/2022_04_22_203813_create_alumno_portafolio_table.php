<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoPortafolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_portafolio', function (Blueprint $table) {
            $table->bigInteger('id_', true);
            $table->date('fecha');
            $table->char('titulo', 25);
            $table->text('descripcion')->nullable();
            $table->char('url_imagen', 100)->nullable();
            $table->bigInteger('id_alumno')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_portafolio');
    }
}
