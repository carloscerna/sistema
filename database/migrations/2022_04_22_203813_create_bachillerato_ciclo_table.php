<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachilleratoCicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachillerato_ciclo', function (Blueprint $table) {
            $table->bigInteger('id_bachillerato_ciclo', true)->index('id_bachillerato_ciclo');
            $table->char('nombre', 70);
            $table->char('codigo', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bachillerato_ciclo');
    }
}
