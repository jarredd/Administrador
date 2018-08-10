<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pueblo_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('ruta_imagen',100);
            $table->string('latitud');
            $table->string('longitud');
            //$table->timestamps();

            $table->foreign('pueblo_id')
                ->references('id')
                ->on('pueblos')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
}
