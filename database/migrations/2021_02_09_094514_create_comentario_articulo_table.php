<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('comentario');
            $table->unsignedInteger('idUsu');
            $table->unsignedInteger('idArt');
            $table->timestamps();
           
        });

         Schema::table('comentario_articulo' , function(Blueprint $table){
            $table->foreign('idArt')->references('idArt')
                ->on('articulos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

         Schema::table('comentario_articulo' , function(Blueprint $table){
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
        Schema::dropIfExists('comentario_articulo');
    }
}
