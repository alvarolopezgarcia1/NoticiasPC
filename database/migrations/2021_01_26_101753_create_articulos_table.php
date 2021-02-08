<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('idArt');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->string('imagen');
            $table->unsignedInteger('idUsu');
            $table->unsignedInteger('idCat');
            $table->integer('estatus')->nullable();
            $table->timestamps();
        });

         Schema::table('articulos' , function(Blueprint $table){
            $table->foreign('idCat')->references('idCat')
                ->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

         Schema::table('articulos' , function(Blueprint $table){
            $table->foreign('idUsu')->references('idUsu')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
