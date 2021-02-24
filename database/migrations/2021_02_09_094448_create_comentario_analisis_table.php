<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_analisis', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('comentario');
            $table->unsignedInteger('idUsu');
            $table->unsignedInteger('idAna');
            $table->timestamps();
           
        });

         Schema::table('comentario_analisis' , function(Blueprint $table){
            $table->foreign('idAna')->references('idAna')
                ->on('analisis')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

         Schema::table('comentario_analisis' , function(Blueprint $table){
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
        Schema::dropIfExists('comentario_analisis');
    }
}
