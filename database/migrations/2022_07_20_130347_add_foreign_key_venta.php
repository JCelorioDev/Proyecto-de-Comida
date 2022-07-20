<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venta', function (Blueprint $table) {
            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id')->on('persona');

            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id')->on('menu');

            $table->integer('id_estadocuenta')->unsigned();
            $table->foreign('id_estadocuenta')->references('id')->on('estadocuenta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};

