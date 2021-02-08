<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //Campos de base de datos de analisis y sus relaciones
    public function up()
    {
        Schema::create('analisis', function (Blueprint $table) {
            $table->increments('idAna');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->string('imagen');
            $table->unsignedInteger('idUsu');
            $table->unsignedInteger('idCat');
            $table->decimal('nota');
            $table->integer('estatus')->nullable();
            $table->timestamps();
           
        });

         Schema::table('analisis' , function(Blueprint $table){
            $table->foreign('idCat')->references('idCat')
                ->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

         Schema::table('analisis' , function(Blueprint $table){
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
        Schema::dropIfExists('analisis');
    }
}
